<?php
/*

Template Name: Single Site

*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php 
			    $args = array(
			        'post_type' => array('custom-section', 'custom-section2','custom-section3','custom-section-form'),
			        'orderby'=> 'menu_order','order' => 'ASC'
			    );
			    $the_query = new WP_Query( $args );		    
			?>
			
            <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>	
            
			<?php 
                if ( 'custom-section3' == get_post_type() ){
                    get_template_part( 'template-parts/content', 'custom-section3' ); 
                }
                else if( 'custom-section2' == get_post_type() ) {
                    
                    get_template_part( 'template-parts/content', 'custom-section2' );
                }
                else if( 'custom-section' == get_post_type() ) {
                    
                    get_template_part( 'template-parts/content', 'custom-section' );
                }
                else{
                    get_template_part( 'template-parts/content', 'custom-section-form' );
                }
            ?>

			<?php endwhile; endif;
            wp_reset_postdata();
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
