<?php ?>
<article <?php post_class(); ?>>

  <div class="entry-content">
    <?php
		the_content();
		?>
  </div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->