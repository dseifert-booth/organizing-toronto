<?php
get_header(); ?>
	<div id="content" class="full-width portfolio portfolio-one">
		<div class="portfolio-wrapper">
			<?php
			while(have_posts()): the_post();
				if(has_post_thumbnail()):
			?>
			<?php
			$item_classes = '';
			$item_cats = get_the_terms($post->ID, 'portfolio_category');
			if($item_cats):
			foreach($item_cats as $item_cat) {
				$item_classes .= $item_cat->slug . ' ';
			}
			endif;
			?>
			<div class="portfolio-item <?php echo $item_classes; ?>">
				<div class="image">
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('portfolio-one'); ?>
					</a>
					<div class="image-extras">
						<div class="image-extras-content">
							<?php $full_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
							<a class="icon" href="<?php the_permalink(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/link-ico.png" alt="<?php the_title(); ?>"/></a>
							<a class="icon" href="<?php echo $full_image[0]; ?>" rel="prettyPhoto[gallery<?php echo $post->ID; ?>]"><img src="<?php bloginfo('template_directory'); ?>/images/finder-ico.png" alt="<?php the_title(); ?>" /></a>
							<h3><?php the_title(); ?><h3>
						</div>
					</div>
				</div>
				<div class="portfolio-content">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<h4><?php echo get_the_term_list($post->ID, 'portfolio_category', '', ', ', ''); ?></h4>
					<?php
					if($data['content_length'] == 'Excerpt') {
						$stripped_content = strip_shortcodes( tf_content( $data['excerpt_length_portfolio'] ) );
						echo $stripped_content; 
					} else {
						the_content('');
					}
					?>
					<div class="buttons">
						<a href="<?php the_permalink(); ?>" class="green button small"><?php echo __('Learn More', 'Avada'); ?></a>
						<?php if(get_post_meta($post->ID, 'pyre_project_url', true)): ?>
						<a href="<?php echo get_post_meta($post->ID, 'pyre_project_url', true); ?>" class="green button small"><?php echo __('View Project', 'Avada'); ?></a>
						<?php endif; ?>
					</div>
				</div>
			</div>
			<?php endif; endwhile; ?>
		</div>
		<?php themefusion_pagination($gallery->max_num_pages, $range = 2); ?>
	</div>
<?php get_footer(); ?>