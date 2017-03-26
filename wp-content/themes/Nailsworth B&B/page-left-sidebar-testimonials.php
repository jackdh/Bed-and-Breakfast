<?php
/*
Template Name: Left Sidebar Testimnials Page
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
            
            	<div class="col-lg-4 clearfix">
				<div class="col-sm-12">
					<?php get_sidebar(); // sidebar 1 ?>
				</div>
				<div class="col-sm-12">
					<?php dynamic_sidebar('reservation') ?>
				</div>
					
				</div>
			
				<div id="main" class="col col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
						
						<header>
							
							<?php $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'thumbnail') ); ?>
							<img src="<?php echo $url ?>" class="featured-img" />

							<div class="page-header"><h1><?php the_title(); ?></h1></div>
						
						</header> <!-- end article header -->
					
						<section class="post_content">
							<?php the_content(); ?>
							<?php edit_post_link('Edit');?>
					
						</section> <!-- end article section -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					

					

					<?php endwhile; ?>	

					<?php else : ?>
					
					<article id="post-not-found">
					    <header>
					    	<h1><?php _e("Not Found", "wpbootstrap"); ?></h1>
					    </header>
					    <section class="post_content">
					    	<p><?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?></p>
					    </section>
					    <footer>
					    </footer>
					</article>

					<?php endif; ?>
					

						<hr />

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php comments_template('',true); ?>
						<?php endwhile; endif; ?>

			
				</div> <!-- end #main -->
    
			</div> <!-- end #content -->

<?php get_footer(); ?>