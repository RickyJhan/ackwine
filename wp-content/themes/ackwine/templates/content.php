<article <?php post_class('mb-5'); ?>>
  <header class="mb-2">
    <h3 class="entry-title mb-1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php get_template_part('templates/entry-meta'); ?>
  </header>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div>
</article>
