<?php
//Include Meta
require ('resources/includes/head.php');

//Include Header
require ('resources/views/header.php');

navigation($header);

//Content
$all_slugs[] = "";

foreach ($model as $key) {
  $all_slugs[] .= $key['slug'];
}




  foreach ($model as $key => $value) {

    if ($value["slug"] == $post) {
      echo '<div class="content">';
        echo '<h2>'.$value['title'].'</h2>';
        echo '<p class="author">Författare: '.$value['author'].'</p>';
        echo '<p class="date">Datum: '.$value['date'].'</p>';
        echo '<p class="message">'.$value['text'].'</p>';
      echo '</div>';
    }

}





//Inlcude Footer
require ('resources/views/footer.php');
?>
