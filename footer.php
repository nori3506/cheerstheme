<?php?>
	<footer id="colophon" class="site-footer">

		<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-social'
				)
			);
		?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- JS for FAQ page -->
	<script>
      const menu = document.querySelectorAll(".question-description");

      function toggle() {
        const content = this.nextElementSibling;
        this.classList.toggle("is-active");
        content.classList.toggle("is-open");
      }

      for (let i = 0; i < menu.length; i++) {
        menu[i].addEventListener("click", toggle);
      }
    </script>
</body>
</html>
