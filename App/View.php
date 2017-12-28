<?php

//
// function View($path,$data=null){
//
//   if($data){
//     extract($data);
//   }
//
//   $path = $path.'.view.php';
//   include "template/master.php";
//
// }


class View {

  protected $path;
  protected $data;

  public function __construct($path,$data=null){
    if($data){
      extract($data);
    }
    $path = $path.'.view.php';
    include "template/master.php";
  }

  // public function getView($data){
  //   return $data;
  // }

}
