#!/usr/bin/perl

use warnings;
use strict;

our $ROOT = 'http://jeanaclark.org';
our @PATHS = qw(
    /
    /collateral/
    /clients/
    /logos/
    /magazines/
    /web/
);

use Test::More;
use Test::HTML::Lint;
use LWP::Simple;

exit main();

sub main {
    plan tests => scalar @PATHS;

    for my $path ( @PATHS ) {
        my $url = "$ROOT$path";
        my $html = get( $url );

        html_ok( $html, $url );
    }
}
