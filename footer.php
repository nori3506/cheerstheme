<?php?>
	<footer id="colophon" class="site-footer">

		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-social'
				)
			);
		?>
    <p>©︎2021 All Rights Reserved Powered by <span>Burnabees</span></p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- JS for FAQ page -->
	<script>
      const menu = document.querySelectorAll(".question-description");
      const wrapper =  document.querySelectorAll('.accordion');

      for (let i = 0; i < menu.length; i++) {
        menu[i].addEventListener("click", () => {
          const content = menu[i].nextElementSibling;
          wrapper[i].classList.toggle("animation");
          menu[i].classList.toggle("is-active");
          content.classList.toggle("is-open");
        });
      }
    </script>
</body>
</html>
