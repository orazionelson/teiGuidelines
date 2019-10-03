<?php

// This is a template for a PHP scraper on morph.io (https://morph.io)
// including some code snippets below that you should find helpful
 require 'scraperwiki.php';
 require 'scraperwiki/simple_html_dom.php';
//
// // Read in a page
$html = scraperwiki::scrape("https://tei-c.org/guidelines/P5/");

var_dump($html);

?>
