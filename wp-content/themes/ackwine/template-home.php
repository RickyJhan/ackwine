<?php
/**
 * Template Name: Home Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<article <?php post_class(); ?>>
	  <?php //get_template_part('templates/page', 'header'); ?>

		<?php if ( !empty( get_field('slides') ) ) { ?>
		<section class="slides-section slide1-section page-section">
			<?php if( have_rows('slides') ): ?>
				<div class="slides swiper-container">
					<div class="swiper-wrapper">
				<?php while( have_rows('slides') ): the_row(); 
					$slide_image = get_sub_field('slide_image');
					$slide_link = get_sub_field('slide_link');
					?>
					<div class="swiper-slide slide" <?php if ( !empty( $slide_image ) ) { ?> style="background-image:url(<?php echo $slide_image['url']; ?>)"; <?php } ?>>
						<div class="container">
						<?php if ( !empty( $slide_image ) ) { ?>
							<?php if ( !empty( $slide_link ) ) { ?><a href="<?php echo $slide_link; ?>"><?php } ?>
							<div class="thumb"><img src="<?php echo $slide_image['url']; ?>" alt="<?php echo $slide_image['alt'] ?>" class="slider-image" /></div>
							<?php if ( !empty( $slide_link ) ) { ?></a><?php } ?>
						<?php } ?>
						</div>
					</div>
				<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</section><?php } ?>	

		<?php if ( !empty( get_field('buckets') ) ) { ?>
		<section class="buckets-section page-section">
			<div class="container">
			<?php if( have_rows('buckets') ): ?>
				<div class="buckets row">
				<?php while( have_rows('buckets') ): the_row(); 
					$bucket_image = get_sub_field('bucket_image');
					$bucket_title = get_sub_field('bucket_title');
					$bucket_link = get_sub_field('bucket_link');
					?>
				<div class="col-xs-12 col-md-6 col-xl-4">
					<div class="bucket clearfix">
					    <div class="bkt-img text-center">
					        <a class="bkt-btn" href="<?php echo $bucket_link; ?>"><img src="<?php echo $bucket_image['url']; ?>" alt="<?php echo $bucket_image['alt'] ?>" class=" mb-3"></a>
					        <h3><a class="bkt-title text-uppercase" href="<?php echo $bucket_link; ?>"><?php echo $bucket_title; ?></a></h3>
					    </div>
					</div>
				</div>					
				<?php endwhile; ?>
				</div>
			<?php endif; ?>
			</div>
		</section><?php } ?>	

		<?php if ( !empty( get_the_content() ) ) { ?>
		<section class="page-section page-content">
			<div class="container">
				<?php the_content(); ?>
				<?php wp_link_pages(['before' => '<nav class="page-nav"><p>' . __('Pages:', 'cyon'), 'after' => '</p></nav>']); ?>
			</div>
		</section><?php } ?>

		<?php if ( !empty( get_field('slides_2') ) ) { ?>
		<section class="slides-section slide2-section page-section">
			<?php if( have_rows('slides_2') ): ?>
				<div class="slides swiper-container">
					<div class="swiper-wrapper">
				<?php while( have_rows('slides_2') ): the_row(); 
					$slide_image_2 = get_sub_field('slide_image_2');
					$slide_link = get_sub_field('slide_link');
					?>
					<div class="swiper-slide slide" <?php if ( !empty( $slide_image_2 ) ) { ?> style="background-image:url(<?php echo $slide_image_2['url']; ?>)"; <?php } ?>>
						<div class="container">
						<?php if ( !empty( $slide_image_2 ) ) { ?>
							<div class="thumb"><img src="<?php echo $slide_image_2['url']; ?>" alt="<?php echo $slide_image_2['alt'] ?>" class="slider-image" /></div>
						<?php } ?>
						</div>
					</div>
				<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</section><?php } ?>	

		<?php if ( !empty( get_field('page_content_1') ) ) { ?>
		<section class="page-content-1 page-section">
			<div class="container"> 
				<div class="page-content">
					<?php $page_content_1 = get_field('page_content_1'); 
						echo $page_content_1;
					?>
				</div>
			</div>
		</section><?php } ?>	


		<?php if ( !empty( get_field('page_content_2') ) ) { ?>
		<section class="page-content-2 page-section bg-primary text-white">
			<div class="container"> 
				<div class="page-content  text-white">
					<div class="row  justify-content-center">
						<div class="col-md-10">
							<?php $page_content_2 = get_field('page_content_2'); 
								echo $page_content_2;
							?>
						</div>
					</div>
				</div>
			</div>
		</section><?php } ?>	


		<?php if ( !empty( get_field('page_content_3') ) ) { ?>
		<section class="page-content-3 page-section">
			<div class="container"> 
				<div class="page-content">
					<?php $page_content_3 = get_field('page_content_3'); 
						echo $page_content_3;
					?>
				</div>
			</div>
		</section><?php } ?>	

  </article>
<?php endwhile; ?>
