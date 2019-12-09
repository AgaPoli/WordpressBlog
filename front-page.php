<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package MaterialWP
 */

get_header(); ?>

<!-- Three features-->
<div class="top-slider ">
	
	<?php
	$posts = get_posts(array(
		'include' => 47,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
	));
	
	echo apply_filters('the_content', $posts[0]->post_content);
	?>
	
</div>
<!-- Three features-->
<div class="three-features">
	<div class="container section-padding">
	<?php
	$posts = get_posts(array(
		'include' => 16,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
	));
	
	echo apply_filters('the_content', $posts[0]->post_content);
	?>
	</div>
</div>

<!-- Product adventages-->
<div class="product_adventages darker_bg">
	<div class="container section-padding">
	<?php
	$posts = get_posts(array(
		'include' => 25,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
	));
	
	echo apply_filters('the_content', $posts[0]->post_content);
	?>
	</div>
</div>

<!-- Call to action-->
<div class="product-more ">
	<div class="container section-padding">
	<?php
	$posts = get_posts(array(
		'include' => 31,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
	));
	
	echo apply_filters('the_content', $posts[0]->post_content);
	?>
	</div>
</div>

<!-- See more-->
<div class="call-to-action accent_bg">
	<div class="container section-padding">
	<?php
	$posts = get_posts(array(
		'include' => 42,
		'post_type' => 'any',
		'numberposts' => 1,
		'suppress_filters' => false,
	));
	
	echo apply_filters('the_content', $posts[0]->post_content);
	?>
	</div>
</div>

<?php get_footer(); ?> 
