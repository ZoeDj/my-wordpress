<?php
/**
 * The template for the homepage
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
            

				<a href="<?php echo site_url('/about/'); ?>" class="btn">Welcome to my website</a>
			<?php endwhile; ?>
		</div>
        
        <div class="static-page">
            
    </div>
    
	</div>
</section>

<?php get_footer(); ?>