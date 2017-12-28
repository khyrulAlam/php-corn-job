<?php

function getMyClass($class){
  include "App/{$class}".".php";
}


spl_autoload_register('getMyClass');
