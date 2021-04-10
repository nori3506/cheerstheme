<div class="team__intro-area">

  <div class="team__prof-image">
    <img src="<?php the_field('profile_image'); ?>" alt="profile image">
  </div>

  <div class="team__full-name">
    <h2><?php the_field('name'); ?></h2>
  </div>

  <div class="team__member-position">
    <?php the_field('position'); ?>
  </div>

  <div class="team__member-description">
    <?php the_field('description'); ?>
  </div>
</div>