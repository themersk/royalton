<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<div class="top-bar-container show-for-medium-up start">
    <nav class="top-bar" data-topbar role="navigation">
    	<div class="row">
        <div class="large-4 columns">
	            <?php foundationpress_top_bar_l(); ?>
        </div>	 
        <div class="large-4 columns">
  
	         <a href="<?php echo home_url(); ?>"><div class="title">
	         </div>
	        </div>
        <div clas="large-4 columns">
	            <?php foundationpress_top_bar_r(); ?> 
        </div>
    </div>
        </nav>
</div>