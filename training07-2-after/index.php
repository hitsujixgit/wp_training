<?php get_header(); ?>

<!-- Contentsはここから -->
<div id="contents">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
</div> <!--contents-->

<?php get_sidebar(); ?>
<?php get_footer(); ?>