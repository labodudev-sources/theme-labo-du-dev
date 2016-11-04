<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Laboratoire_développeur
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="content-poc">
				<h3>POC</h3>
				<section class="list-poc">
				<?php
				$query = new WP_Query( 'cat=21' );
				if ( $query->have_posts() ) :
					while ( $query->have_posts() ) : $query->the_post();
						get_template_part( 'template-parts/content' );
					endwhile; // End of the loop.
				endif;
				?>
			</section>
			</section>



		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
