<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<title>
		<?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;

		wp_title( '|', true, 'right' );

		// Add the blog name.
		bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) );

		?>
	</title>
	<!-- Twitter bootstrap META, CSS, JQUERY and bootstrapJS -->
	<link href="<?php echo get_template_directory_uri();?>/css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri();?>/css/bootstrap-responsive.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
	
	<link href="<?php echo get_template_directory_uri();?>/css/general.css" type="text/css" rel="stylesheet">
	
	<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	NAV-TOP
	<?php include 'nav-top.php'; ?>

	<!-- where other menus' like "Site Title", "Site Description", "Overview of Company", "Search Form" -->
	<div id="page">
		<!-- start of the content of your website what you are blogging -->
		<div id="mainContent">
		This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>This is a Content<br/>2<br/>1<br/>END OF Content<br/>