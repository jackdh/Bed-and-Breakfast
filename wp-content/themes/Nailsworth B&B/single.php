<?php get_header(); ?>
			
			<div id="content" class="clearfix row">
				
			
				<div id="main" class="col-sm-8 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
						<header>
						
							<?php the_post_thumbnail( 'wpbs-featured' ); ?>
							

							<div class="page-header row">
								<div class="col-xs-6">
									<h1 class="single-title" itemprop="headline">
										<?php the_title(); ?>
									</h1>
								</div>
								<div class="col-xs-6">
									<h1 class="pull-right">
										£ <?php the_field('price');?>
									</h1>
								</div>
							</div>
						
						</header> <!-- end article header -->
					
						<section class="post_content clearfix" itemprop="articleBody">
							<img class="img-responsive some-paddding" src="<?php the_field('room_image');?>">

							<?php the_content(); ?>
							

						
							<?php wp_link_pages(); ?>
					
						</section> <!-- end article section -->
						<?php edit_post_link('Edit');?>
						
						<footer>
			
							<?php the_tags('<p class="tags"><span class="tags-title">' . __("Tags","wpbootstrap") . ':</span> ', ' ', '</p>'); ?>
							
							<?php 
							// only show edit button if user has permission to edit posts
							if( $user_level > 0 ) { 
							?>
							<a href="<?php echo get_edit_post_link(); ?>" class="btn btn-success edit-post"><i class="icon-pencil icon-white"></i> <?php _e("Edit post","wpbootstrap"); ?></a>
							<?php } ?>
							
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
			
				</div> <!-- end #main -->
    
				
    		<div class="col-sm-4">
					<div class="col-sm-12">
					<?php get_sidebar(); // sidebar 1 ?>
				</div>
				<div class="col-sm-12">
					<?php dynamic_sidebar('reservation') ?>
				</div>
				</div>
			</div> <!-- end #content -->

<?php get_footer(); ?>