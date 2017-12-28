<?php
include 'App/init.php';
$db = new Database();
$table = 'subscriber_list';
$rows = $db->select($table);

$view = new View('subList',array(
  'rows'=> $rows
));
