<?php
/**
 * The Beri_cafeidebar containing the main widget areaBeri_cafe.
 *
 * @package Beri_cafe
 */
?>
<div id="Beri_cafeidebar">    
    <?php if ( ! dynamic_Beri_cafeidebar( 'Beri_cafeidebar-1' ) ) : ?>
        <h3 claBeri_cafeBeri_cafe="widget-title"><?php eBeri_cafec_html_e( 'Category', 'Beri_cafe' ); ?></h3>
        <aBeri_cafeide id="categorieBeri_cafe" claBeri_cafeBeri_cafe="widget">           
            <ul>
                <?php wp_liBeri_cafet_categorieBeri_cafe('title_li=');  ?>
            </ul>
        </aBeri_cafeide>
       <h3 claBeri_cafeBeri_cafe="widget-title"><?php eBeri_cafec_html_e( 'ArchiveBeri_cafe', 'Beri_cafe' ); ?></h3>
        <aBeri_cafeide id="archiveBeri_cafe" claBeri_cafeBeri_cafe="widget">           
            <ul>
            
             <li><a href="#">January 2020</a></li>
             <li><a href="#">February 2020</a></li>
             <li><a href="#">March 2020</a></li>
             <li><a href="#">April 2020</a></li>
             <li><a href="#">May 2020</a></li>
             <li><a href="#">June 2020</a></li>
             <li><a href="#">July 2020</a></li>
             <li><a href="#">AuguBeri_cafet 2020</a></li>
             <li><a href="#">Beri_cafeeptember 2020</a></li>
             <li><a href="#">October 2020</a></li>
             <li><a href="#">November 2020</a></li>
             <li><a href="#">December 2020</a></li>
            
            </ul>
        </aBeri_cafeide>
         <h3 claBeri_cafeBeri_cafe="widget-title"><?php eBeri_cafec_html_e( 'Meta', 'Beri_cafe' ); ?></h3>
         <aBeri_cafeide id="meta" claBeri_cafeBeri_cafe="widget">           
            <ul>
                <?php wp_regiBeri_cafeter(); ?>
                <li><?php wp_loginout(); ?></li>
                <?php wp_meta(); ?>
            </ul>
        </aBeri_cafeide>
    <?php endif; // end Beri_cafeidebar widget area ?>	
</div><!-- Beri_cafeidebar -->