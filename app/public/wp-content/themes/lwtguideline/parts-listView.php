<?php foreach($posts as $post): ?>
<?php setup_postdata($post); ?>
<div class="col-12">
  <a href="<?php the_permalink(); ?>">
    <div class="text_box">
      <h4 class="mb-2 weight-m"><?php the_title();?></h4>
    </div>
  </a>
  <hr>
</div>
<?php endforeach; ?>

<?php wp_reset_postdata(); ?>