<?php get_header() ?>

<?php
    if(have_posts()){
      while(have_posts()){
        the_post();
        ?>
        <div class="col-sm-6">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail('thumbnail', array('class' => 'img-fluid mb-2'));
          } ?>
          <h6>
            <?php echo the_title(); ?>
          </h6>
          <p class="small text-muted">
            <?php echo the_excerpt(); ?>
          </p>
        </div>
        <?php
      }
    }else{
      _e('No existen posts');
    }
    ?>

     <div class="card">
                        <img src="assents/img/img.png" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h6 class="card-title">Title goes here Title goes <br> here Title goes here Title<br>goes here </h6>
                                <p class="card-text">Lorem ipsum dolor sit ametbr,<br> consectetur adipiscing elit. Nunc<br> scelerisque tortor sit amet<br> condimentum porttitor. Integer<br> augue urna, volutpat in sapien a,<br> convallis commodo quam.</p>
                                <p class="card-text"><small class="text-body-secondary">24/04/2022</small></p>
                            </div>
                    </div>
    
   <?php get_footer() ?>