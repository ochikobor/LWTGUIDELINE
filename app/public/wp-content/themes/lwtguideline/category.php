<?php get_header(); ?>

<div class="super_container">
  <div class="content-body single">
    <div class="row">
      <?php
      if (have_posts()) : 
          while (have_posts()) :
          the_post();
          get_template_part( 'parts-listView' );
      endwhile;
      ?>

      <?php else : ?>
          <div class="col-full">
              <div class="wrap-col">
                  <p>カテゴリーに該当する記事がありませんでした。</p>
              </div>
          </div>
      <?php endif; ?>
    </div>
  </div>
</div>


<?php get_footer( ); ?>
    