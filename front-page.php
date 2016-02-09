<?php get_header(); ?>

<div id="caption" style="background-color:#444;" >&nbsp;</div>


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
    echo "<img src=\"resources/homepage-images/".(rand(1,$filecount)).".jpg\" alt=\"Felice Grodin, detail\" />";
  }
?>


<?php get_footer(); ?>
