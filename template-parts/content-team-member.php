<?php ?>
<article <?php post_class(); ?>>
  <div class="post-thumbnail">
    <?php the_post_thumbnail(); ?>
  </div>
  <div class="upper-position">
    <div class="member-name">
      <?php the_field('name'); ?>
    </div>
  </div>
  <div class="left-top"></div>
  <div class="right-top"></div>
  <div class="left-bottom"></div>
  <div class="right-bottom"></div>
  <div class="member-profile-image">
    <?php 
      $image = get_field('profile_image');
      // $size = 'full'; // (thumbnail, medium, large, full or custom size)
      if( $image ) {
          echo wp_get_attachment_image($image);
      }
    ?>

    <img src="<?php echo the_field('profile_image'); ?>" alt="">
  </div>

</article>