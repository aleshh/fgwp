<?php get_header(); ?>

<!-- <div id="caption">
  <a href=''>back</a><a href=''>next</a> 5 of 7 :: <i>UNITED STATES</i>, ink on Mylar, 16" x 40", (2012)
</div>

<div id="image">
  <a href=''>
    <img src='./5.jpg' class='image' alt='slideshow image' title='click for next image...'>
  </a>
</div> -->

<?php
  if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

?><div id="caption"><?php
        previous_post('%', 'back', 'no');
        next_post('%', 'next', 'no');
        the_title();
        echo("</div>");
        // echo("<div id='image'>");
        the_content();
        // echo("</div>");
    }
}
?>


<?php get_footer(); ?>
