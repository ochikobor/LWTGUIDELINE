 <?php get_header();?>
  <div class="super_container">

  <div class="content-body single">
    <div class="center">
      <?php get_template_part('parts-mainView'); ?>
    </div>


    <div class="pt-4 pb-4 row">
      <div class="col-12 row">
        <div class="col-md-3">
            <div class="text_box">
              <h2 class="weight-m">ブランドコンセプト</h2>
              <h4 class="mb-2">各ブランドの基本となる思想について</h4>
            </div>
        </div>
        <div class="col-md-9 row">
          <?php
            $args = array(
              'post_type' => 'post',
              'include' => array(23,25,27),
            );
            $posts = get_posts($args);
          ?>
          <?php get_template_part('parts-subView'); ?>
        </div>
      </div>
    </div>
    <div class="pt-4 pb-4 row">
      <div class="col-12 row">
        <div class="col-md-3 mb-2">
            <div class="text_box">
                <h2 class="weight-m">基本原則</h2>
                <h4 class="mb-2">アプリケーション開発における基本となる価値観について</h4>
            </div>
        </div>
        <div class="col-md-9 row">
          <?php
            $args = array(
              'post_type' => 'post',
              'include' => array(31,33,35),
            );
            $posts = get_posts($args);
          ?>
          <?php get_template_part('parts-subView'); ?>
        </div>
      </div>
    </div>
    <div class="pt-4 pb-4 row">
      <div class="col-12 row">
        <div class="col-md-3 mb-2">
            <div class="text_box">
                <h2 class="weight-m">コミュニケーションツール</h2>
                <h4 class="mb-2">だれでも開発の内容を理解し使えるようにためのガイドラインやテンプレートやチェックリストを提供します</h4>
            </div>
        </div>
        <div class="col-md-9 row">
        <?php
            $args = array(
              'post_type' => 'post',
              'include' => array(38,40,42)
            );
            $posts = get_posts($args);
          ?>
          <?php get_template_part('parts-subView'); ?>
        </div>
      </div>
    </div>
    <div class="pb-4 row">
      <div class="col-12">
        <h2 class="weight-m mb-4">Hint</h2>
      </div>
      <div class="col-12 row center">
        <?php
          $args = array(
              'post_type'      => 'post',
              'category_name' => 'tutorial',
              'posts_per_page' => 5,
          );
          $posts = get_posts($args);
        ?>
        <?php get_template_part('parts-bookView'); ?>
      </div>
      <a class="nav-link" href="<?php echo home_url(); ?>/category/hint">+ More</a>
    </div>
    </div>
  </div>
  

  <?php get_footer();?>
