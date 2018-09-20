<?php get_header(); ?>

<div class="form">
<?php echo get_post_meta($post->ID, 'google_form_embed_code', true); ?>
</div>

<?php get_footer (); ?>

</html> 