<?php get_header(); ?> 
	
	<!-- main content -->

	<section id="main-content">
	
		<!-- main posts loop -->
		<section id="posts">
	
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

			<?php the_permalink() ?>
			<?php the_title(); ?> 
 	  		<?php the_content(); ?>
			
			</article>

		<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria :{'); ?></p>
		<?php endif; ?>
		
		<!-- end posts -->
		</section>
		
		<!-- post pagination -->
		<nav id="pagination">
		<?php posts_nav_link(); ?>		
		</nav>
	
	<!-- end main-content -->
	
	</section>
		
<?php get_footer(); ?> 
