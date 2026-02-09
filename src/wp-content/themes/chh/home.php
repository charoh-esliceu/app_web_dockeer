<?php get_header() ?>

<main class="container my-5">

  <h2>Lastest Blog</h2>
  <hr class="mb-4">

  <div class="row g-4">


  <?php
    if(have_posts()){
      while(have_posts()){
        the_post();

  ?>



        <div class="col-md-4">
          <picture class="thumbnail">
          <?php 
          if(has_post_thumbnail()) {
            the_post_thumbnail('medium', array('class' => 'img-fluid mb-2 img'));
          } else {
            _e( 'Sense imatge en el post');
          } 
          ?>
          </picture>
          <a class="new-title" href="<?php the_permalink(); ?>">
            <h6>
              <?php echo the_title(); ?>
            </h6>
          </a>
          <p class="small text-muted">
            <?php echo the_excerpt(); ?>
          </p>
        </div>

    <?php
      }


    the_posts_pagination( array(
    'mid_size'  => 2,
    'prev_text' => __( 'Anterior', 'textdomain' ),
    'next_text' => __( 'Siguiente', 'textdomain' ),
    ) );

    }else{
      _e('No existen posts');
    }
    ?>


  </div>
</main>

<?php get_footer() ?>