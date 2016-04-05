<?php get_header(); ?>

<!-- <div id="caption" style="background-color:#444;" >&nbsp;</div> -->
<a href="/drawings-figural/">
  <div id="full-page" style="
    <?php
      $filecount = 0;
      $fileexist = true;
      do {
        if (file_exists("resources/homepage-images/".($filecount+1).".jpg")) {
          $filecount++;
        } else {
          $fileexist = false;
        }
      } while ($fileexist == true);

      if ($filecount == 0) {
        echo "Error: no images found!";
      } else {
        echo "background-image:url(resources/homepage-images/".(rand(1,$filecount)).".jpg\")";
        // echo "<img src=\"resources/homepage-images/".(rand(1,$filecount)).".jpg\" alt=\"Felice Grodin, detail\" />";
      }
    ?>

    ">
  </div>
</a>


<?php get_footer(); ?>
