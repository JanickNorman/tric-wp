<?php get_header() ?>

    <?php echo tric_breadcrumb(); ?>
    <div class="breadcrumb">
      <div class="breadcrumb__item"><a href="/">Home</a></div>
      <div class="breadcrumb__item"><a href="/events.html">Events</a></div>
      <div class="breadcrumb__item breadcrumb__item--last"><span>Tour de Poncol Jilid 2</span></div>
    </div>

    <?php
      if (tric_page_is_hierarchical()) {
        get_template_part('page_with-nav');
      } else {
        get_template_part('page_without-nav');
      }


    ?>


<?php get_footer() ?>