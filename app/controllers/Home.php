<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
class Home extends Controller{
  public function index(){
  
    $this->view('home');
  }

}