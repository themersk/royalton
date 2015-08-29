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
<li><a href="http://www.hamptonclassic.com" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/HC_logo.jpg"></a></li>
</ul>
</div>

<div class="row footer-content">
<div class="large-8 medium-6 columns sitemap show-for-medium-up">

<div class="large-2 medium-4 columns">
<ul>
<li class="head"><a href="/equestrian-center">Equestrian Center</a></li>
<li><a href="/equestrian-center#amenities">Amenities</a></li>
<li><a href="/equestrian-center#boarding">Boarding</a></li>
<li><a href="/equestrian-center#trainers">Trainers</a></li>
</ul>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head"><a href="/the-estate">The Royalton Estate</a></li>
<li><a href="/the-estate#amenities">Amenities</a></li>
<li><a href="/the-estate#events">Events</a></li>
</ul>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head"><a href="/estates-at-royalton">Estates at Royalton</a></li>
<li><a href="/estates-at-royalton">Explore the Estates</a></li>
</ul>
</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head"><a href="/our-story">Our Story</a></li>
<li><a href="/our-story">About Royalton</a></li>
<li><a href="/our-story#press">Press</a></li>

</div>

<div class="large-2 medium-4 columns">
<ul>
<li class="head"><a href="/royal-blood-stock">Royal Bloodstock</a></li>
</div>
<div class="large-2 medium-4 columns">
</div>
</div>


<div class="large-4 medium-6 columns">
<span class="socicon twitter"><a href="https://twitter.com/Royalton_Farms" target="_blank">a</a></span>
<span class="socicon facebook"><a href="https://www.facebook.com/RoyaltonEquestrian" target="_blank">b</a></span>
<span class="socicon vimeo"><a href="http://vimeo.com/royaltonfarms" target="_blank">s</a></span>
<span class="socicon instagram"><a href="https://instagram.com/royaltonfarms" target="_blank">x</a></span>
<span class="socicon google"><a href="https://plus.google.com/116209190281095319221/about" target="_blank">c</a></span>
<span class="email"><a href="mailto:info@royaltonequestrian.com">info@royaltonequestrian.com</a></span>
<span class="phone"><a href="tel:6314335726">(631) 433-5726</a></span>
<span class="address"><a href="thttps://www.google.com/maps/place/55+Cox+Neck+Rd,+Mattituck,+NY+11952/data=!4m2!3m1!1s0x89e88e65d95329a5:0x80460849d1afb6d?sa=X&ved=0CB0Q8gEwAGoVChMIs9yJ8erOxwIVBDc-Ch0YuA4l" target="_blank">55 Cox Neck Rd,</a></span><br/>
<span class="address2"><a href="thttps://www.google.com/maps/place/55+Cox+Neck+Rd,+Mattituck,+NY+11952/data=!4m2!3m1!1s0x89e88e65d95329a5:0x80460849d1afb6d?sa=X&ved=0CB0Q8gEwAGoVChMIs9yJ8erOxwIVBDc-Ch0YuA4l" target="_blank">Mattituck NY</a></span>

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
<!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/jMouseWheel-1.0.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/vide.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/vendor/lazyload.min.js"></script>-->

<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom/minify-all.js"></script>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/custom/bucket.js"></script>

<?php do_action( 'foundationpress_before_closing_body' ); ?>

  <script>
    $(document).foundation();
  </script>

</body>
</html>
