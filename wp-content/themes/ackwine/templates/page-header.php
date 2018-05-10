<?php use Roots\Sage\Titles; ?>
<?php

$featured_img_url = get_the_post_thumbnail_url($post->ID, 'full');
if( $featured_img_url ) { $pageheader_style = 'has-bg'; 
?>
<header class="page-header <?php echo $pageheader_style; ?> text-center" style="background-image: url(<?php echo $featured_img_url; ?>);background-size: cover;background-repeat: no-repeat;background-position: 50% 50%;">
	<div class="container">
  	<h1 class="text-uppercase text-white"><?= Titles\title(); ?></h1>
		<?php if( is_single() ) { get_template_part('templates/entry-meta'); } ?>
  </div>
</header>
<?php } else { $pageheader_style = ' pb-4 pt-4';  ?>
<header class="page-header  <?php echo $pageheader_style; ?>">
	<div class="container">
  	<h1 class=""><?= Titles\title(); ?></h1>
		<?php if( is_single() ) { get_template_part('templates/entry-meta'); } ?>
		<?php the_post_thumbnail( 'large', array( 'class'=>'mt-3 w-100' ) ) ?>
  </div>
</header>
<?php  } ?>