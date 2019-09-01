	<!-- FOOTER -->
	<div class="dark footer">
		<div class="menu" style="text-align:center">
			<?php wp_nav_menu( array("theme_location"=>"footer-menu") ); ?>
		</div>

		<div class="wrapper" id="legal-info">
			<a class="light"><?php echo get_bloginfo("name") ?> - <?php echo get_bloginfo("description") ?></a>
			<br>
			<a>Questo blog è stato realizzato con WordPress <?php echo get_bloginfo("version") ?></a>
		</div>
	</div>
	<?php wp_footer(); ?>

</body>
</html>