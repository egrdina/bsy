<?php get_header(); ?>

<?php if (!post_password_required()) { ?>
	<div class="form">
		<?php echo get_post_meta($post->ID, 'google_form_embed_code', true); ?>
	</div>
<?php } ?>

<?php get_footer (); ?>

</html> 