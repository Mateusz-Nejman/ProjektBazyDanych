<?php

require_once "bootstrap.php";

try {
  $repo = $entityManager->getRepository('label');

  $labels = $repo->findAll();

  foreach($labels as $label)
  {
    echo "<strong>Wytwórnia {$label->getName()}</strong><ul>";
    foreach($label->getArtists() as $artist)
    {
      echo "<li>{$artist->getArtistName()}<ol>";

      foreach($artist->getTracks() as $index=>$track)
      {
        echo "<li>{$track->getTitle()}</li>";
      }
      echo "</ol></li>";
    }
    echo "</ul>";
  }
  /*foreach ($articles as $index => $article) {
    //echo "{$article->getTitle()}\nAutor: {$article->getAuthor()}\n{$article->getContent()}";
  }*/
} catch (Exception $e) {
  echo $e;
}
?>