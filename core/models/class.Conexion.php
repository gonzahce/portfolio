<?php

class Conexion extends mysqli{
  public function __construct(){
    parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    $this->connect_errno ? die('Error') : null;
<<<<<<< HEAD
=======
    // $this->set_charset("utf-8");
>>>>>>> 9356307c32ee33cb4ec9e8e20585ac0c56acb9af
  }
  public function rows($query){
    return mysqli_num_rows($query);
  }
  public function liberar($query){
    return mysqli_free_result($query);
  }
  public function recorrer($query){
    return mysqli_fetch_array($query);
  }
}

?>