<?php
include 'App/init.php';
$db = new Database();
Session::init();
$username = Session::get('username');

if(empty($username)){
  header('location:/');
};


$id = (int)$_GET['id'];
$status = $_GET['status'];

if($status === 'inactive'){
  $result = $db->setInactive($id);
  if($result){
    header('location:/subsList.php');
  }
}else if($status === 'active'){
  $result = $db->setActive($id);
  if($result){
    header('location:/subsList.php');
  }
};
