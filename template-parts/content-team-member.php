<?php ?>
<article <?php post_class(); ?>>
  <div class="upper-position">
    <div class="team__member-name">
      <?php the_field('name'); ?>
    </div>
  </div>
  <div class="left-top"></div>
  <div class="right-top"></div>
  <div class="left-bottom"></div>
  <div class="right-bottom"></div>
  <div class="team__member-profile-image">
    <?php 
      $image = get_field('profile_image');
      $size = 'thumbnail'; // (thumbnail, medium, large, full or custom size)
      if( $image ) {
          echo wp_get_attachment_image($image, $size);
      }
    ?>

    <img src="<?php echo the_field('profile_image'); ?>" alt="">
  </div>

</article>