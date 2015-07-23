<?php
$post = $wp_query->post;
if ( in_category('4') ) {
include(TEMPLATEPATH.'/single-blog.php');
}
?>