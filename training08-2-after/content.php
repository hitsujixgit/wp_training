<!-- 投稿記事を表示する -->
<div class="post">
	<?php if(have_posts()): while(have_posts()): the_post(); ?>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<?php the_content(); ?>
    <?php endwhile; endif; ?>
</div> <!-- post-->