<?php
/*
Template Name: 固定投稿
*/
get_header();
?>
<div class="super_container">
    <div class="content-body single">
        <?php if(have_posts()): while(have_posts()):the_post(); ?>
            <?php the_content(); ?></p>
        <?php endwhile; endif; ?>
    </div>
</div>
<?php get_footer(); ?>
