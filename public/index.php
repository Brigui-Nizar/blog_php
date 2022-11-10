<?php

use App\Core\View;

require __DIR__ . './../vendor/autoload.php';

if (preg_match("/(.css|.png|.jpeg|.js|.gif|.pdf|.mp3|.mp4|.html|.jpg)$/i", $_SERVER['REQUEST_URI'])) {

  return false;
}


echo (new View(__DIR__ . '/../templates'))->render('hello', ['name' => 'john doe']);

use App\Table\UserTable;
use App\Core\Configuration;
use App\Table\ArticleTable;
use App\Core\ConnectionDataBase;

$config = new Configuration(__DIR__ . '/..');


// Tester si une configuration éxsiste :
echo "<br>// Tester si une configuration éxsiste : <br>";
echo $config->has('DATABASE_HOST');  // true

// Récupére une valeur de configuration
echo "<br>// Récupére une valeur de configuration <br>";
echo $config->get('DATABASE_USER'); // root

// Attention, notre objet doit retourner une erreur
// si la valeur n'éxsiste pas
$pdo=(new ConnectionDataBase($config))-> connectionDataBase();
$table = new UserTable($pdo);

$users = $table->findAll();

foreach ($users as $user) {
  // ici $user est une instance de App\Entity\User
  echo "<br><br>id utilisateur : " . $user->id;
  echo "<br> email : " . $user->email;
  echo "<br> date de creation : " . $user->createdAt;
}


$articlestable = new ArticleTable($pdo);

$articles = $articlestable->findAll();

foreach ($articles as $article) {

  echo "<br><br> Article n° " . $article->id;

  $articleAuthor = (new UserTable($pdo))->findbyId($article->id);
  echo "<br>Auteur : ";
  echo $articleAuthor->firstname . ' ' . $articleAuthor->lastname;

  echo "<br>titre : " . $article->title;
}
