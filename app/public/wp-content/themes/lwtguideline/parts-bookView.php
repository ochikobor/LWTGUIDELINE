<?php foreach($posts as $post): ?>
    <?php setup_postdata($post); ?>
    <div class="col-sx-6 p-4" >
      <a href="<?php the_permalink(); ?>">
        <div class="article" style='background-color:
        <?php if(has_tag('LIXIL')){
          print("rgb(231,84,0)");
          } elseif(has_tag('INAX')){
            print("rgb(0,188,228)");
            } else{
              print("rgb(84,88,90)");
        }?>'>
          <div class="article_text">
            <h4 class="mb-2 weight-m"><?php the_title();?></h4>
          </div>
        </div>
      </a>
      <div class="user">
        <div>
          <?php echo get_avatar( get_the_author_id(), 36); ?>
        </div>
        <div class="ml-2">
          <h5><?php the_author(); ?></h5>
          <h5>デザイナー</h5>
        </div>
      </div>
    </div>
  <?php endforeach; ?>
  
  <?php wp_reset_postdata(); ?>
      