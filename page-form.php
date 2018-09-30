<?php get_header(); ?>

<?php if (!post_password_required()) { ?>
	<div class="form">
		<?php $formID = get_post_meta($post->ID, 'forminator_form_id', true);
		if ($formID) {
                    echo do_shortcode('[forminator_form id="' . $formID . '"]');
		} ?>	
	</div>
<?php } ?>

<?php get_footer (); ?>

</html> 