<?php

get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article class="main__post">
      <h2 class="main__post-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="main__post-content">
          <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile;

  else :
    echo "<p>No posts have been found to display</p>";

  endif;

  get_footer();
 ?>
