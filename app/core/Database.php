<?php
Trait Database{
  private function connect(){
    $string="mysql:hostname=".DBHOST.";dbname=".DBNAME;
    $con = new PDO($string,DBUSER,DBPASSWORD);
    return $con;
  }
  public function query($query, $data =[]){
    $con = $this->connect();
    $statement = $con->prepare($query);
    $check = $statement -> execute($data);
    if($check){

      $result = $statement->fetchAll(PDO::FETCH_OBJ);
      if(is_array($result) && count($result))
      {
        return $result;
      }
    return false;
  }
  }
  public function get_first_row_or_column_from_query($query, $data =[]){
    $con = $this->connect();
    $statement = $con->prepare($query);
    $check = $statement -> execute($data);
    if($check){

      $result = $statement->fetchAll(PDO::FETCH_OBJ);
      if(is_array($result) && count($result))
      {
        return $result[0];
      }
    return false;
  }
  }
}