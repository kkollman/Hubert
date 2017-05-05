<?php get_header(); ?>

<!-- open the main part for post -->

<section class="single col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-2">
  <?php
  if (have_posts()) :
    while (have_posts()) : the_post(); ?>
    <article class="page__post">
      <div class="page__post-info">
        <!-- display the date of creation and the author name -->
        <!-- Dodano <?php the_time('d/m/y'); ?> przez <a href="<php? get_author_posts_url(get_author_meta('ID'));" ?> <?php the_author(); ?> </a> -->
        <div class="page__post-category post-category">
          <?php the_category(); ?>
        </div>
      </div>
      <?php the_post_thumbnail('page-banner'); ?>
      <section class="page__post-text post-text">
        <div class="row page__post-title-row">
          <h2 class="page__post-title post-title">
            <?php the_title(); ?>
          </h2>
        </div>
        <div class="row">
          <div class="page__post-content post-content col-sm-8 col-sm-offset-2">
              <?php the_content(); ?>
          </div>
        </div>
      </section>
    </article>

  <?php endwhile;

  else :
    echo "<p>Post does not exist any more, or can't be read at the moment.</p>";

  endif; ?>
</section>
<!-- end the main part for post -->

  <?php get_footer();  ?>
