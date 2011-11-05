#!/usr/bin/perl

use strict;
use LWP::UserAgent;
use File::Basename;
use DBI;

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

load_index();

# load results into the database
sub load_index {
    my $dbh = DBI->connect(
        'DBI:mysql:precious_passage',
        'dev',
        'user'
    ) || die "Could not connect to database: $DBI::errstr";

    open(RESULTS, "$out_file") || die $!;
    my @lines = <RESULTS>;
    close RESULTS;

    my @processed_lines = map {
        my %data;
        ($data{text}, $data{url}, $data{title}) = split('\|\|\|', $_);
        \%data
    } @lines;

    # drop all entries
    $dbh->do('delete from static_index where id');

    foreach my $entry (@processed_lines) {
        my ($text, $url, $title) = ($dbh->quote($$entry{text}),$$entry{url},$$entry{title});
        my $query = qq|INSERT INTO static_index(entry,url_title,title) VALUES ("${text}","${url}","${title}")|;
       #print $query, "\n";
        $dbh->do($query);
    }

    $dbh->disconnect();
}

#TODO: More content validation would be nice here:
# content length
# spacing
sub parse_page {
    my $html = shift;
    $html =~ m|<title>(.*)</title>|;
    my $title = $1;
    
    $html =~ s|\n| |g;
    $html =~ s|\s{2,}| |g;
    $html =~ s|\t|    |g;
    
    $html =~ s|<!-- exclude -->.*<!-- /exclude -->||g;
    my $valid = $html =~ m|<!-- unique -->(.*)<!-- /unique -->|g;

    return undef if !$valid;

    my $content = $1;
    $content =~ s|<.+?>|   |g;
    $content =~ s|\s{2,}| |g;
    
    return undef if !$title || !$content;
    
    return {
        title   => $title,
        content => $content,
    };
}

sub output_results {
    my $results = shift;

    open(OUT, ">$out_file") || die $!;
    #print OUT "text|||url|||title\n";
    foreach my $r (@$results) {
        eval {
            print OUT $$r{content} .'|||' . $$r{path} .'|||'.$$r{title}."\n";
        };

        if ($@) {
            print $@, "\n";
        }
    }
    
    close OUT;
}
