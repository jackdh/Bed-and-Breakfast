<?php
/*
Template Name: Left Sidebar Page Rooms
*/
?>

<?php get_header(); ?>
			
			<div id="content" class="clearfix row">

				<div class="col-lg-4 clearfix">
				<div class="col-sm-12">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
						edit_post_link();
					endwhile; else: ?>
						<p>Sorry, no posts matched your criteria.</p>
						edit_post_link();
					<?php endif; ?>
				</div>
				<div class="col-sm-12">
					<?php dynamic_sidebar('reservation') ?>
				</div>
					
				</div>
				<div id="main" class="col col-sm-8 clearfix" role="main">
				<div class="rooms"></div>

						<?php 
							$args = array (
							'post_type' => 'room',
							'orderby'	=> 'menu_order',
							'order'		=> 'ASC'
							);
							$the_query = new WP_Query( $args );
							?>

						<?php if ( have_posts() ) : while ( $the_query->have_posts()  ) : $the_query -> the_post(); ?>
							<?php $postCount++;?>
							<img class="img-responsive" src="<?php the_field('room_image');?>">
							<div class="room-text">
								<div class="row">
									<div class="col-xs-6">
										<a href="<?php the_permalink(); ?>"><h1><?php echo get_the_title(); ?></h1></a>
									</div>
									<div class="col-xs-6">
										<h1 class="pull-right">£<?php the_field('price');?></h1>
									</div>
								</div>
								<div class="room-desicription">

									<?php the_content(); ?>

								</div>

							</div>
							<?php edit_post_link(); ?>
							<?php
								if ($the_query->current_post +1 == $the_query->post_count) {
								} else {
									echo '<hr />';
								}
							?>

						<?php endwhile; endif; ?>



					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					
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
    
			</div> <!-- end #content -->

<?php get_footer(); ?>