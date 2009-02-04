<?php
/*
Plugin Name: Twitterlinker
Plugin URI: tbd
Description: Automagically turns an @name twitter reference into a twitter link to that person's twitter page.
Version: 0.2
Author: Thursday's Child
Author URI: http://www.thursdays-child.net
*/
?>
<?php add_filter('the_content', 'twitterlinker'); ?>
<?php add_filter('the_search_query', 'twitterlinker'); ?>
<?php
function twitterlinker($content){
    $content = preg_replace("/\@([0-9a-zA-Z]+)/", "<a href=\"http://twitter.com/\\1\">\\0</a>", $content);
    return $content;
}
// end function
?>
