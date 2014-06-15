<!-- 投稿記事を表示する -->
<?php 
	global $hitsuji_app_thumbnails_mid_w;
	global $hitsuji_app_thumbnails_mid_h;
?>

<div class="post">
	<h2>最近の投稿</h2>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
	<div class="post excerpt-application">
		<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    
    	<!-- サムネイル表示 -->
     	<?php if (has_post_thumbnail()): ?>
     		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('app_thumbnails_mid'); ?></a>
        <?php else: ?>
        	<a href="<?php the_permalink(); ?>">
            <img src="<?php bloginfo('template_url') ?>/img/nophoto.png" 
            	width="<?php echo $hitsuji_app_thumbnails_mid_w; ?>" height="<?php echo $hitsuji_app_thumbnails_mid_h ?>" alt="no photo" />
            </a>
     	<?php endif; ?>
		        
	</div>
    <?php endwhile; endif; ?>
    
</div> <!-- post-->