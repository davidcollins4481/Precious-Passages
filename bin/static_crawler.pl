#!/usr/bin/perl

use strict;
use LWP::UserAgent;
use HTML::Parser;
use File::Basename;

# config
my $content_directory = '/home/david/Projects/Precious-Passages/application/views/static';
my $domain = 'http://david.preciouspassage.com';
# not sure if CSV is gonna work here. Check for CSV module
my $out_file = "results.csv";
###

my $ua = LWP::UserAgent->new;
my @results = ();

foreach my $file (glob "${content_directory}/*") {
    my $filename = basename($file);
    # remove extension
    my $path = "/d/${filename}";
    my $response = $ua->get("${domain}${path}");
    
    if ($response->is_success) {
        my $content = $response->decoded_content;
        my $parsed = parse_page($content);
        $$parsed{path} = $path;
        push(@results, $parsed);
    } else {
        warn $filename . " : " . $response->status_line;
    }
}

output_results(\@results);

sub parse_page {
    my $html = shift;
    
    $html =~ m|<title>(.*)</title>|;
    my $title = $1;
    
    $html =~ s|\n||g;
    $html =~ s|\s{2,}||g;
    $html =~ s|\t||g;
    $html =~ s|<!-- exclude -->.*<!-- /exclude -->||g;
    $html =~ m|<!-- unique -->(.*)<!-- /unique -->|g;

    my $content = $1;
    $content =~ s|<.+?>| |g;
    $content =~ s|\s{2,}||g;
    return {
        title   => $title,
        content => $content,
    };
}

sub output_results {
    my $results = shift;
    
    open(OUT, ">$out_file") || die $!;
    print OUT "title,path,content\n";

    foreach my $r (@$results) {
        print OUT $$r{title} .',' . $$r{path} .','.$$r{content}."\n";
    }
    
    close OUT;
}
