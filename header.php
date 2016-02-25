
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Felice Grodin </title>
  <link rel="stylesheet" href="/wp-content/themes/fgwp/style.css">
  <?php wp_head(); ?>
</head>

<body >

<div id="header">
  <div id="menu">
    <div class="column">
      <a id="home" href="/" ><img alt="Felice Grodin" src="/resources/felicegrodin2.gif" /></a>
    </div>


    <div class="column">
    <?php
      $cat = get_categories( array(
        'hide_empty'   => 0,
        'orderby'     => 'name'
        ));
      $i = 0;
      foreach ($cat as $category) {
        $i ++;
        $link = get_category_link($category->term_id);
        echo "<a href='$link'>$category->name</a>";
        if ($i % 3 == 0) {
          if ($i == 3) {
            // column 3 is between two sets of drawings so no line
            echo "</div><div class='col-break'>";
          } else {
            echo "</div><div class='column'>";
          }
        }


      }

    ?>

    </div> <!-- .column -->

<!--
    <div class="column">
      <a href="/drawings-figural" class="active" >DRAWINGS::figural</a>
      <a href="/drawings-expansion">DRAWINGS::expansion</a>
      <a href="/drawings-biological">DRAWINGS::biological</a>
    </div>
    <div class="column3" >
      <a href="/drawings-topo-field">DRAWINGS::topo/field</a>
      <a href="/drawings-laminar">DRAWINGS::laminar</a>
    </div>
    <div class="column" >
      <a href="/installation">INSTALLATION</a>
      <a href="/sculpture">SCULPTURE</a>
      <a href="/assemblage">ASSEMBLAGE</a>
    </div>
    <div class="column">
      <a href="/video-digital">VIDEO/DIGITAL</a><a href="/text">TEXT</a><a href="/info">INFO</a>
    </div>
    <div class="lastcolumn">
      &nbsp;
    </div> -->


  </div> <!-- #menu -->
</div> <!-- #header -->

<div id="content">