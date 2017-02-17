<?php
/**
 * Template Name: About Page
 * Description: The template for displaying the about page
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>


<section class="home-page">
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				
    </div>
		<?php endwhile; // end of the loop. ?>

	
</section><!-- .home-page -->
        


    <section class="services">
        <aside class="services-featured-work">
            <?php query_posts('posts_per_page=5&post_type=services'); ?>
                <?php while ( have_posts() ) : the_post();   
           
                   
                    $header = get_field('header');
                    $image1 = get_field('custom-image1');
                    $image2 = get_field('custom-image2');
                    $image3 = get_field('custom-image3');
                    $size = "full";    
                    $align = ($wp_query->current_post % 2 == 0)? 'alignright' : 'alignleft'; ?>
                
             </aside>
        
        <section class="services-content">
            <aside class="services-sidebar">
                <h2><?php the_title(); ?></h2>
                <h6 class="services-paragraph"> <?php the_content(); ?> </h6>
                <br>

            </aside>
            
            
                <figure class="services-images <?php echo $align; ?>">
                    
                    <?php echo wp_get_attachment_image( $image1, $size);  ?>
            
                    <?php echo wp_get_attachment_image( $image2, $size); ?> 
                    
                    <?php echo wp_get_attachment_image( $image3, $size);  ?>   
                    
                </figure>
            
            
        </section>
        
                    
        <?php endwhile; // end of the loop ?>  
            <br>
        
          <section class="pre-footer">
                <h2 class="interested">Interested in working with us? </h2>  
                    <a id="contact-button" class="button" href="<?php echo home_url(); ?>/contact">Contact</a>
          </section>
        
        </section>
       
<?php get_footer(); ?>
