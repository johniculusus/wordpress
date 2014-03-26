<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');

//JAFD this starts the learning
//http://codex.wordpress.org/Stepping_Into_Templates
?>

<?php get_header(); ?>
<?php get_footer(); ?>