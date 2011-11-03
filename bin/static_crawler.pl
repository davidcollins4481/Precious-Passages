#!/usr/bin/perl

use strict;
use LWP::UserAgent;
use File::Basename;

# config
my $content_directory = '/home/david/Projects/Precious-Passages/application/views/static';
my $domain = 'http://david.preciouspassage.com';
my $out_file = "results";
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
        next if !$parsed;
        $$parsed{path} = $path;
        push(@results, $parsed);
    } else {
        warn $filename . " : " . $response->status_line;
    }
}

output_results(\@results);

#TODO: maybe some kind of content validation. Check if there is enough content
sub parse_page {
    my $html = shift;
    
    $html =~ m|<title>(.*)</title>|;
    my $title = $1;
    
    $html =~ s|\n||g;
    $html =~ s|\s{2,}||g;
    $html =~ s|\t||g;
    
    $html =~ s|<!-- exclude -->.*<!-- /exclude -->||g;
    my $valid = $html =~ m|<!-- unique -->(.*)<!-- /unique -->|g;

    return undef if !$valid;

    my $content = $1;
    $content =~ s|<.+?>| |g;
    $content =~ s|\s{2,}||g;
    
    return undef if !$title || !$content;
    
    return {
        title   => $title,
        content => $content,
    };
}

sub output_results {
    my $results = shift;
    
    open(OUT, ">$out_file") || die $!;
    print OUT "text|||url|||title\n";

    foreach my $r (@$results) {
        print OUT $$r{content} .'|||' . $$r{path} .'|||'.$$r{title}."\n";
    }
    
    close OUT;
}
