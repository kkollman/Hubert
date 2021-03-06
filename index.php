<?php

get_header();
?>
<!-- sidebar start -->
<section class="sidebar sidebar-left col-md-2">
  <?php dynamic_sidebar('sidebar_left'); ?>
</section>
<!-- sidebar end -->
<!-- start of main post list -->
<section class="main col-lg-8 col-md-10">
  <?php
    if (have_posts()) :
      while (have_posts()) : the_post(); ?>
      <article class="main__post">
        <div class="main__post-category post-category">
          <?php the_category(); ?>
        </div>
        <div class="main__post-thumbnail post-thumbnail">
          <?php the_post_thumbnail('small-thumbnail'); ?>
        </div>
        <h2 class="main__post-title post-title">
          <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
          </a>
        </h2>
        <div class="main__post-content post-content">
            <?php the_excerpt(); ?>
        </div>
      </article>

    <?php endwhile;

    else :
      echo "<p class\"error page__error\">No posts have been found to display</p>";

    endif;
    ?>
</section>
<!-- end of main post list -->


<?php
  get_footer();
 ?>
