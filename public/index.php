<?php
require __DIR__ . '/../vendor/autoload.php';

require __DIR__ . '/../app/controllers/MainController.php';

//définit les routes de notre application (l'ensemble des URLs possibles)
$router = new AltoRouter();

$router->setBasePath('/S05/S05-E04-atelier-oShop-Minakho95/public');

//On définit nos routes
$router->map('GET', '/', 'MainController#home', 'home');

//On vérifie si l'URL courante correspond à une route définie précédemment
$match = $router->match();

dump($match);


if($match != false)
{

}
