<?php get_header(); ?>

<p class="page-title">最近の投稿記事</p>

<!-- Contentsはここから -->
<div id="contents">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<?php get_template_part('content'); ?>
	<?php endwhile; endif; ?>
</div> <!--contents-->
<?php get_footer(); ?>