	<footer id="abdev_main_footer">
		<div class="container">

			<?php
			$hide_back_to_top=get_theme_mod('hide_back_to_top',false);
			if(!$hide_back_to_top): ?>
				<a href="#" id="abdev_back_to_top" title="<?php _e('Back to top', 'ABdev_revelance'); ?>"><i class="ci_icon-back-to-top"></i></a>
			<?php endif; ?>

			<?php $punchline=get_theme_mod('punchline','');
			if($punchline!=''): ?>
				<div id="footer_punchline">
					<?php echo do_shortcode($punchline); ?>
				</div>
			<?php endif; ?>

			<?php $copyright=get_theme_mod('copyright','');
			if($copyright!=''): ?>
				<div id="footer_copyright">
					<?php echo do_shortcode($copyright); ?>
				</div>
			<?php endif; ?>

		</div>
	</footer>

	<?php wp_footer(); ?>

	<?php echo (get_theme_mod('boxed_body', false)) ? '</div>' : '' ; ?>

</body>
</html>