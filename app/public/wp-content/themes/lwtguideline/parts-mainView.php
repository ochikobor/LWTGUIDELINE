<?php
$args = array(
    'post_type'      => 'post',
    'category_name' => 'works',
    'orderby' => 'rand',
    'posts_per_page' => 1,
);
$posts = get_posts($args);
?>

<?php foreach($posts as $post): ?>
<?php setup_postdata($post); ?>
  <a href="<?php the_permalink(); ?>">
    <div class="thumbnail">
      <?php echo get_thumb_img(); ?>
    </div>
    <h6 class="mb-2 mt-2">Works：<?php the_title();?></h6>
  </a>
<?php endforeach; ?>

<?php wp_reset_postdata(); ?>