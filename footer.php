<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Beri_cafe
 */
?> 
<div class="footerinfoarea">
	
    <div class="clear"></div>
    <div class="footermenu">
    	<?php wp_nav_menu( array('theme_location' => 'footermenu') ); ?>
    </div>
	 </div>
<div id="copyright-area">
<div class="copyright-wrapper">
<div class="container">
     <div class="copyright-txt"><?php echo esc_html('Beri_cafe');?></div>
     <div class="clear"></div>
           
</div>
</div><!--end .footer-wrapper-->
<?php wp_footer(); ?>
</body>
</html>