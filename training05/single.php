<?php get_header(); ?>
<!-- Contentsはここから -->
<div id="contents">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('content','single'); ?>
	<?php endwhile; endif; ?>
</div> <!--contents-->
<?php get_footer(); ?>