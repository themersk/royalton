<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0.0
 */

?>

</section>
<footer>
	<?php /*do_action( 'foundationpress_before_footer' ); */?>

<div class="sponsor row"><h4>Royalton is a proud sponsor of</h4>
<ul>
<li>Logo</li>
<li>Logo</li>
<li>Logo</li>
</ul>
</div>

<div class="row footer-content">
<div class="large-8 medium-6 columns sitemap">

<div class="large-3 medium-4 columns">
<ul>
<li class="head">Equestrian Center</li>
<li>Amenities</li>
<li>Boarding</li>
<li>Trainers</li>
</ul>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head">The Estate</li>
<li>Amenities</li>
<li>Events</li>
</ul>
</div>

<div class="large-3 medium-4 columns">
<ul>
<li class="head">Estates at Royalton</li>
<li>Explore the Estates</li>
</ul>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head">Our Story</li>
<li>About Royalton</li>
<li>About the Team</li>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head">Press</li>
</div>

</div>


<div class="large-4 medium-6 columns">
<span class="socicon twitter">a</span>
<span class="socicon facebook">b</span>
<span class="socicon vimeo">s</span>
<span class="socicon instagram">x</span>
<span class="socicon google">c</span>
<span class="email">info@royaltonequestrian.com</span>
<span class="phone">(631) 433-5726</span>
<span class="address">55 Cox Neck Rd,</span><br/>
<span class="address2">Mattituck NY</span>

</div>



	<?php/* do_action( 'foundationpress_after_footer' ); */?>
<div class="bar"><span><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/royaltonfarms-details.png"></span></div>
</footer>



<a class="exit-off-canvas"></a>

	<?php do_action( 'foundationpress_layout_end' ); ?>
	</div>
</div>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom/bucket.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jMouseWheel-1.0.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/debug.addIndicators.min.js"></script>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

  <script>
    $(document).foundation();
  </script>

</body>
</html>
