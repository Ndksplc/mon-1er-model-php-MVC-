<?php

/**
 * User
 */

 class User{
  
  use Model;
  protected $table ='users';
  protected $allowedColumns = [
    'name',
    'age'
  ];
  public function validate($data){
    $this->error = [];
    if(empty($data['email'])){
      $this->error['email'] = "Email is required";
    }
    else if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
      $this->error['email'] = "Email is not valid";
    }
    if(empty($data['password'])){
      $this->error['password'] = "Password is required";
    }
    if(empty($this->error)){
      return true;

    }
    return false;

  }
 }