<?php
 /*
 Template Name: 投稿ページ
 Template Post Type: post
 */
 ?>
<?php get_header();?>

<?php if(have_posts()) :?>
  <?php while (have_posts()) : the_post() ; ?>

	<?php
		$cat = get_the_category();
		$catslug = $cat[0]->slug;
		$catname = $cat[0]->cat_name;
	?>
	
  <div class="super_container">
    <div class="content-body single">
      <h2 class="pb-2"><?php the_title(); ?></h2>
      <?php the_content(); ?>
    </div>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <?php get_footer();?>