<?php

class Database{
  private $host = 'localhost';
  private $user = 'root';
  private $pass = '';
  private $dbname = 'dbSubscriber';
  private $pdo;
  public function __construct()
  {
    if(!isset($this->pdo)){
      try {
        $link = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname.";charset=utf8",$this->user,$this->pass);
        $link->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $link->exec("set names utf8");
        $this->pdo = $link;
      } catch (PDOException $e) {
        echo "ERROR:".$e->getMessage();
        die("Fail Database Connection");
      }
    }
  }


//select
  public function select($table){
    $query  = $this->pdo->prepare("SELECT * FROM $table ORDER BY s_id DESC");
    $query->execute();
    if($query->rowCount() > 0){
       $value = $query->fetchAll(PDO::FETCH_ASSOC);
     }
    return !empty($value)? $value:false;
  }

//insert
  public function insert($data,$table){
    if(!empty($data) && is_array($data)){
      $keys   = '';
      $values = '';
      $keys   =  implode(',',array_keys($data));
      $values =  ':'.implode(', :',array_keys($data));
      $sql = "INSERT INTO ".$table." (".$keys.") VALUES (".$values.")";
      $query = $this->pdo->prepare($sql);
      foreach ($data as $key => $value) {
        $query->bindValue(":$key", $value);
      }
      $result = $query->execute();
      if ($result) {
        $lastid = $this->pdo->lastInsertId();
        return $lastid;
      }else{
        return false;
      }
    }else{
      echo "please insert value";
    }
  }

//isLogin
  public function isLogin($table,$data){
    $sql = "SELECT * ";
    $sql .=" FROM ".$table;
    if(array_key_exists("where",$data)){
        $sql .= " WHERE ";
        $i=0;
        foreach ($data['where'] as $key => $value) {
          $add = '';
          $add .= ($i > 0)?" AND ":"";
          $sql .= "$add"."$key= :$key";
          $i++;
        }
      }
      $query = $this->pdo->prepare($sql);
      if(array_key_exists("where",$data)){
        foreach ($data['where'] as $key => $add) {
          $query->bindValue(":$key",$add);
        }
      }
      $query->execute();
      $value = $query->fetchAll(PDO::FETCH_ASSOC);
      return !empty($value) ? $value:false;
  }


  //single
  public function single($table,$id){
    $sql  = " SELECT * FROM $table WHERE s_id = $id ";
    $query  = $this->pdo->prepare($sql);
    $query->execute();
    if($query->rowCount() > 0){
       $value = $query->fetchAll(PDO::FETCH_ASSOC);
     }
    return !empty($value)? $value:false;
  }


  //Update Data
  public function update($table,$data,$condition){
    if(!empty($data) && is_array($data)){
      $keys   = '';
      $values = '';
      $i = 0;
      foreach ($data as $key => $value) {
        $add = '';
        $add = ($i > 0)?" , ":"";
        $keys .= "$add"."$key= :$key";
        $i++;
      }
      if(!empty($condition) && is_array($condition)){
        $values .= " WHERE ";
        $i = 0;
        foreach ($condition as $key => $value) {
          $add = '';
          $add = ($i > 0)?" AND ":"";
          $values .= "$add"."$key= :$key";
          $i++;
        }
      }
      $sql = "UPDATE ".$table." SET ".$keys.$values;
      $query = $this->pdo->prepare($sql);
      foreach ($data as $key => $value) {
        $query->bindValue(":$key", $value);
      }
      foreach ($condition as $key => $value) {
        $query->bindValue(":$key", $value);
      }
      $result = $query->execute();
      return $result ? $query->rowCount(): false;
    }else{
      return false;
    }
  }



}
