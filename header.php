
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
        if ($i % 3 == 0) echo "</div><div class='column'>";
      }

// foreach( $categories as $category ) {
//     $category_link = sprintf( '<a href="%1$s" alt="%2$s">%3$s</a>'
//         esc_url( get_category_link( $category->term_id ) ),
//         esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
//         esc_html( $category->name )
//     );

//     echo '<p>' . sprintf( esc_html__( 'Category: %s', 'textdomain' ), $category_link ) . '</p> ';
//     echo '<p>' . sprintf( esc_html__( 'Description: %s', 'textdomain' ), $category->description ) . '</p>';
//     echo '<p>' . sprintf( esc_html__( 'Post Count: %s', 'textdomain' ), $category->count ) . '</p>';
// }
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