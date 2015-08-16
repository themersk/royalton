<?php
/**
 * Template part for top bar menu
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="hide-for-medium-up"> 
    	<button href="#" class="button dropdown menu-dropdown right-off-canvas-toggle">Menu</button>
    	</div>
    	
    	
<div class="top-bar-container start">
    <nav class="top-bar show-for-small-up" data-topbar role="navigation">
    	<div class="row">
    	<div class="small-12 columns bar"><span>EST. MMXIV</span></div>
        <div class="medium-5 columns">
        	     <div class="show-for-large-up">
	            <?php foundationpress_top_bar_l(); ?>
        	     </div>
        	     <p class="show-for-medium-up">&nbsp;</p>
        </div>	 
        <div class="medium-2 columns" style="min-height: 60px;">
	         <a href="<?php echo home_url(); ?>"><div class="title"></div></a>
	    </div>
        <div class="medium-5 columns">
	            <div class="show-for-large-up">
	            <?php foundationpress_top_bar_r(); ?> 
	            </div>
	            <div class="show-for-medium-only">
	            	            <button href="#" class="button dropdown menu-dropdown right-off-canvas-toggle">Menu</button>

		            <!--<button href="#" data-dropdown="drop1" aria-controls="drop1" aria-expanded="false" class="button dropdown menu-dropdown">Menu</button><br>
					<ul id="drop1" data-dropdown-content class="f-dropdown" aria-hidden="true">
					  <?php foundationpress_top_bar_l(); ?>
					  <?php foundationpress_top_bar_r(); ?> 
					</ul>-->
	            </div>
        </div>

        <div class="small-12 columns bar"><span>NEW YORK</span></div>
    </div>
        </nav>
</div>
