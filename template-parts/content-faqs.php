<?php ?>
<article <?php post_class(); ?>>

  <div class="faq-qusetion accordion">
    <h2 class='question-description menu '><?php the_field('question'); ?></h2>
    <p class='answer-description contents'><?php the_field('answer'); ?></p>
  </div>

</article>