<?php
// Afficher les erreurs dans le navigateur:
error_reporting(E_ALL);
ini_set('display_errors', 1);

//...//

require "../app/core/init.php";
DEBUG ? ini_set('display_errors',1) : ini_set('display_errors',0);
  
$app = new App;

$app->loadController();

