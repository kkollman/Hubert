<?php

get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article class="page__post">
      <h2 class="page__post-title">
        <a href="<?php the_permalink(); ?>">
          <?php the_title(); ?>
        </a>
      </h2>
      <div class="page__post-content">
          <?php the_content(); ?>
      </div>
    </article>

  <?php endwhile;

  else :
    echo "<p>Post does not exist any more, or can't be read at the moment.</p>";

  endif;

  get_footer();
 ?>
