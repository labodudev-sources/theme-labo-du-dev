<section id="slide-<?php the_id(); ?>" class="homeSlide">
	<div class="background" style="background-image: url('<?php the_post_thumbnail_url(); ?>');">
		<div class="post-content">
			<h2><?php the_title(); ?></h2>
			<p><?php echo wp_trim_words( get_the_content(), 20, NULL ); ?></p>
		</div>
	</div>
</section>
