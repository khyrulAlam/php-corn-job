<?php
include 'App/init.php';
$db = new Database();

//Check is Loging
Session::init();
$username = Session::get('username');
if(empty($username)){
  header('location:/');
};


$table = 'subscriber_list';
//$rows = $db->select($table);
$rows = $db->selectActiveUser();

$view = new View('home',array(
  'rows'=> $rows
));
