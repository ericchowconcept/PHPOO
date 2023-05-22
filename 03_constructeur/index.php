<?php

require_once 'Article.php';


// *fatal error: too few argument $article = new Article;

$article = new Article("titre de l'article");
// var_dump($article);

// * pour afficher une propriété private on utilise un getter
echo $article ->getTitre();

$article2 = new Article("Titre de l'article2", "Contenu de l'article 2");
var_dump($article2);
echo '<br>';

echo "<h2>" . $article2->getTitre() . "</h2>";
echo "<p>" . $article2->getContenu(). "</p>";
echo "<p>" . date_format($article2 ->getDatePublication(), "d/m/Y, H:i:s"). "</p>";
echo '<br>';

echo $article2;
echo '<br>';


