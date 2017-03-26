<?php
/*
Template Name: Homepage
*/
?>

<?php get_header(); ?>

			<?php if ( is_user_logged_in() ): ?>
				<div class="containter">
					<a style="margin-bottom: 10px;" href="http://www.nailsworthbedandbreakfast.co.uk/wp-admin/admin.php?page=metaslider">Click here to edit these. Only you can see this.</a>
				</div>
			<?php endif; ?>
			<div id="content" class="clearfix row home-page">
					
				<div id="main" class="col-sm-12 clearfix" role="main">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
					<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article" class="main-page-article">
						
						<section class="row post_content">

							<?php echo do_shortcode( get_field('the_slider_id') ) ?>
							
			
						</section> <!-- end article header -->
						
						<footer>
			
							<p class="clearfix"><?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?></p>
							
						</footer> <!-- end article footer -->
					
					</article> <!-- end article -->
					
					<?php 
						// No comments on homepage
						//comments_template();
					?>
					
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

					<div id="homepage-footer" class="clearfix row">
		            <div class="col-sm-4">
		            	<?php the_content( ); ?>
		            </div>
		            <div class="col-sm-4">
		            	<?php the_field('center_area');?>
		            	<button class="btn btn-default" data-toggle="modal" data-target="#myModal">
						  Send us an email.
						</button>
		            </div>
		            <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer3') ) : ?>
		            <?php endif; ?>
		            <?php if ( is_user_logged_in() ): ?>
			            <div class="col-md-12">
							<a href="http://www.nailsworthbedandbreakfast.co.uk/wp-admin/customize.php?url=http%3A%2F%2Fwww.nailsworthbedandbreakfast.co.uk%2F">Click here to edit. Click widget 1,2 or 3 to edit these lower ones.</a>		            	
			            </div>
		        	<?php endif; ?>
		          	
		          	</div>
			
				</div> <!-- end #main -->
    
				<?php //get_sidebar(); // sidebar 1 ?>
    
			</div> <!-- end #content -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-body">
					<?php dynamic_sidebar('reservation') ?>
			      </div>
			      <div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			      </div>
			    </div>
			  </div>
			</div>

<?php get_footer(); ?>