<?php
/*
 * Template Name: Home Page
 * Description: Full width homepage
 */
get_header(); ?>

	<div class="hero <?php if ( is_front_page() ) { echo 'front-hero';}?>">
	    <div id="splash" class="splash <?php if ( is_front_page() ) { echo 'home';}?>"></div>

<div id="overlay">
      <div class="fullbg <?php if ( is_front_page() ) { echo 'home';}?>"></div>
  </div>
		</div>




<div class="row">
	<div class="small-12 large-12 columns main-content" role="main">

	<?php do_action( 'foundationpress_before_content' ); ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<?php /* do_action( 'foundationpress_page_before_entry_content' ); */?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
				<p><?php the_tags(); ?></p>
			</footer>
		</article>
	<?php endwhile;?>

	<?php do_action( 'foundationpress_after_content' ); ?>

	</div>
</div>
<?php get_footer(); ?>