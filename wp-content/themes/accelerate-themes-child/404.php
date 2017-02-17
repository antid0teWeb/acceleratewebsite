<?php
/**
 * The template for displaying the 404 page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
              <h1 class="header-404">Whoops you took a wrong turn</h2>
              <img src="http://www.comedytrafficschool.com/wp-content/uploads/2015/02/Screen-Shot-2015-02-26-at-3.54.39-PM.png"> </img>
             <p>Sorry the page you are trying to reach just wants to be left alone at the moment. We apologise. In the meantime feel free to check out our Blog or our featured work</p>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
           
          
			<?php endwhile; // end of the loop. ?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>