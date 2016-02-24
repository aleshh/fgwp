<?php

  get_header();

  if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

        echo('<div id="caption" style="background-color:#444;" >&nbsp;</div>');
        echo('<div id="text">');

        the_title("<h2>", "</h2>");
        the_content();

        echo('</div>');
    }
  }

  get_footer();

?>