<?php
include 'App/init.php';

$db = new Database();
$message = [];
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
  $result = $db->insert($data,'subscriber_list');
  if($result){
    $message['success'] = 'Successfully insert new subscriber';
  }else{
      $message['error'] = 'Something Wrong ! Please try again';
  }
}

$view = new View('addSubs',array(
  'message'=>$message
));
