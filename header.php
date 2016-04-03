
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Felice Grodin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <link rel="stylesheet" href="/wp-content/themes/fgwp/includes/slidebars/slidebars.min.css">
  <link rel="stylesheet" href="/wp-content/themes/fgwp/style.css">
  <?php wp_head(); ?>
</head>

<body <?php if (is_front_page()) echo "id='front-page'"; ?>>


<div class="sb-slidebar sb-right sb-style-overlay sb-width-thin"
        id="mobile-menu">

  <?php

    $cat = get_categories( array(
      'hide_empty'   => 0,
      'orderby'     => 'name'
      ));

    $active = get_category(get_query_var('cat'))->name;

    foreach ($cat as $category) {
      $link = get_category_link($category->term_id);

      // echo "<div>";
      if ($category->name == $active) {
        echo "<a href='$link' class='active'>$category->name</a>";
      } else {
      echo "<a href='$link'>$category->name</a>";
      }
      // echo "</div>";
    }

   ?>

</div> <!-- sb-slidebar -->

<div id="sb-site">

<div id="header">

  <div id="menu">

    <div class="column" id="title-box">
      <a id="home" href="/" >Felice Grodin</a>
    </div>

    <div id="mobile-link" class="sb-toggle-right">
      <a href="#">
        <img src="/wp-content/themes/fgwp/images/menu.svg" alt="Menu">
      </a>
    </div>


    <div class="column">
    <?php



      $i = 0;
      $drawings = substr($cat[0]->name, 0, 3);

      foreach ($cat as $category) {
        $i ++;
        $link = get_category_link($category->term_id);


        if ($drawings) {
          $current = substr($category->name, 0, 3);
          if ($current != $drawings) {
            echo "</div><div class='column'>";
            $i = 4;
            $drawings = false;
          }
        }

        if ($category->name == $active) {
          echo "<a href='$link' class='active'>$category->name</a>";
        } else {
        echo "<a href='$link'>$category->name</a>";
        }

        if ($i % 3 == 0 && $i < 7) {
          if ($i == 3) {
            // column 3 is between two sets of drawings so no line
            echo "</div><div class='column-joined'>";
          } else {
            echo "</div><div class='column'>";
          }
        }

      }

    ?>

    </div> <!-- .column -->



  </div> <!-- #menu -->

</div> <!-- #header -->

<div id="content">