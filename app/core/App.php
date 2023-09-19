<?php

class App{
  private $defaultController = 'Home';
  private $defaultMethod = 'index';
  private function splitURL()
  {
  $URL = $_GET["url"] ?? 'home';
  $URL = explode("/", trim($URL,'/'));
  return $URL;
  }

  public function loadController(){
    
    $URL = $this-> splitURL();
    $filename = "../app/controllers/".ucfirst($URL[0]).".php";
    /** Select Controller */
    if(file_exists($filename)) {
      require $filename;
      $this->defaultController =ucfirst($URL[0]);
      unset($URL[0]);
    }
    else{
      require "../app/controllers/_404.php";
      $this->defaultController = '_404';
    }
    $Controller = new $this->defaultController;
    /** Select Method */
    if(!empty($URL[1])){
      if(method_exists($Controller,$URL[1])){
        $this->defaultMethod = $URL[1];
        unset($URL[1]);
      }
    }
    
    call_user_func_array([$Controller,$this->defaultMethod],$URL);
  
  }
}
