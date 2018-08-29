<!--
This is the template page for individual event posts.
-->
<?php

  get_header();

  while(have_posts()) {
    the_post(); ?>


    <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>"></div>
    <div class="page-banner__content container container--narrow">
      <h1 class="page-banner__title"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
        <p>Dont forget to replace me later. SINGLE-PROFESSOR.PHP</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">


    <div class="generic-content"><?php the_content(); ?></div>
    <?php

      $relatedPrograms = get_field('related_programs');

      if ($relatedPrograms) {

        echo '<hr class="section-break">';

        if (sizeof($relatedPrograms > 1)) {
          echo '<h2 class="headline headline--medium">Subjects Taught</h2>';
        } else {
          echo '<h2 class="headline headline--medium">Subject Taught</h2>';
        }
        echo '<ul class="link-list min-list">';


        foreach($relatedPrograms as $program) { ?>

          <li><a href="<?php echo get_the_permalink($program) ?>"><?php echo get_the_title($program) ?></a></li>

        <?php }
        echo '</ul';
      }
    ?>
  </div>

  <?php }

  get_footer();
?>