<?php
// Contiendra toutes les classes communes aux différents controller

class Controller{
  public function view($name) {
    $filename = "../app/views/".$name.".views.php";
    if(file_exists($filename)) {
      require $filename;
    }
    else{
      require "../app/views/404.views.php";
    }

  }
}
