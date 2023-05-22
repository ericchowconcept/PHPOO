<?php

require_once 'Article.php';


// *fatal error: too few argument $article = new Article;

$article = new Article("titre de l'article");
var_dump($article);
