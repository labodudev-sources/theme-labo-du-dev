<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laboratoire_développeur
 */

?>

<div class="content-full wordpress-image" style="background-image: url('<?php echo the_post_thumbnail_url(); ?>')">
	<h2><?php the_title(); ?></h2>
	<p><?php echo wp_trim_words( get_the_content(), 7, NULL ); ?></p>
</div>
