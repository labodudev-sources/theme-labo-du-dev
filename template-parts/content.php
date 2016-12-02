<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laboratoire_développeur
 */

?>

<div>
	<?php the_post_thumbnail( 'medium' ); ?>
	<h2><?php the_title(); ?></h2>
	<p><?php echo wp_trim_words( get_the_content(), 7, NULL ); ?></p>
</div>
