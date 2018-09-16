<!--
This is the template page for individual event posts.
-->
<?php

  get_header();

  while(have_posts()) {
    the_post();
    pageBanner();

    ?>




  <div class="container container--narrow page-section">


    <div class="generic-content">
      <div class="row group">

        <div class="one-third">
          <?php the_post_thumbnail('professorPortrait') ?>
        </div>

        <div class="two-thirds">
           <?php the_content() ?>
        </div>
      </div>

    </div>
    <?php


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