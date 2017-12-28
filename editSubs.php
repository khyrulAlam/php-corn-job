<?php

include 'App/init.php';
$db = new Database();

$id =  (int)$_GET['id'];
$table = 'subscriber_list';

$row = $db->single($table,$id);
if(!$row) return;

//Edit data processing
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $data = array(
      'name'=> $_POST['name'],
      'profession'=>$_POST['profession'],
      'company'=>$_POST['company'],
      'phone'=>$_POST['phone'],
      'email'=>$_POST['email'],
      'address'=>$_POST['address'],
      'toDate'=>$_POST['toDate'],
      'fromDate'=> $_POST['fromDate']
    );

    $table = 'subscriber_list';
    $condition = array(
      's_id' =>  $id
    );
    $result = $db->update($table,$data,$condition);
    // print_r($result);
    // exit();
    if($result){
      header('location:/subsList.php');
    }

};

new view('editSubs',array(
  'row' => $row,
  'message' => $data
));
