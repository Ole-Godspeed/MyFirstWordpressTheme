<?php get_header();?>

<div class="container">

  <h1 class="mb-3"><?php single_cat_title();?></h1>

  <?php if (have_posts()): while(have_posts()): the_post(); ?>

    <div class="card p-2 mb-3">
      <h3><?php the_title();?></h3>

      <?php if(has_post_thumbnail()):?>
        <img class="card-img-top" src="<?php the_post_thumbnail_url()?>"> 
      <?php endif;?>

      <?php the_excerpt();?>
      <a href="<?php the_permalink();?>">Read more</a>
    </div>

  <?php endwhile; endif; ?>

</div>

<?php get_footer();?>