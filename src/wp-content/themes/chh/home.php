<?php get_header() ?>

<section>
  <div class="row">
    <h1>Latest Blogs</h1>

      <?php
        if(have_posts()){

        while(have_posts()){
          the_post();

      ?>
      <div class="col-sm-6">
        <picture class="thumbnail">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail('thumbnail', array('class' => 'img-fluid mb-2'));
              }else{
                -e('sense imatge en el post')
                   }  
            }?>
        </picture>
        <a class="new-title" href="<?php the_permalink(); ?>">
            <p><?php echo the_title(); ?></p>
        </a>
        <p class="small text-muted">
          <?php echo the_excerpt(); ?>
        </p>
      </div>
      <?php
         }else{
          _e('No existen posts');
        }
      ?>  
  </div>    
</section>    

<?php get_footer() ?>