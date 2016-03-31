<?php
/**
 * Created by PhpStorm.
 * User: Ri
 * Date: 08.03.2016
 * Time: 21:27
 */
use \Patterns\Classes\Adapter\SimpleBook;
use \Patterns\Classes\Adapter\BookAdapter;

writeln('BEGIN TESTING ADAPTER PATTERN');
writeln('');

$book = new SimpleBook("Gamma, Helm, Johnson, and Vlissides", "Design Patterns");
$bookAdapter = new BookAdapter($book);
writeln('Author and Title: '.$bookAdapter->getAuthorAndTitle());
writeln('');

writeln('END TESTING ADAPTER PATTERN');

function writeln($line_in) {
    echo $line_in."<br/>";
}