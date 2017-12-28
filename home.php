<?php
include 'App/init.php';
$db = new Database();
Session::init();
$username = Session::get('username');

if(empty($username)){
  header('location:/');
};


$table = 'subscriber_list';
$rows = $db->select($table);

$view = new View('home',array(
  'rows'=> $rows
));
