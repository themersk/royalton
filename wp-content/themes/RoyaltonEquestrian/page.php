<?php
/*
 * Template Name: Home Page
 * Description: Full width homepage
 */
get_header(); ?>

	<div class="main-hero hero <?php echo the_title();?>">
		</div>




<div class="row full-page">
	<div class="small-12 large-12 columns main-content" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php /* do_action( 'foundationpress_page_before_entry_content' ); */?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
		</article>
	<?php endwhile;?>
	</div>
</div>


<?php get_footer(); ?>