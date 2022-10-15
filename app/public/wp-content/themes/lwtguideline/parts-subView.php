<?php foreach($posts as $post): ?>
  <?php setup_postdata($post); ?>
    <?php if ( has_post_thumbnail() ): ?>
      <div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail_box">
            <?php echo get_thumb_img(); ?>
          </div>
          <h6 class="mb-2 mt-2"><?php the_title();?></h6>
        </a>
      </div>
    <?php else: ?>
      <div class="col-md-4">
        <a href="<?php the_permalink(); ?>">
          <div class="thumbnail_box" style="background-color : rgb(84,88,90);">
            <h2 class="article_text">Coming Soon......</h2>
          </div>
          <h6 class="mb-2 mt-2"><?php the_title();?></h6>
        </a>
      </div>
    <?php endif; ?>
<?php endforeach; ?>

<?php wp_reset_postdata(); ?>