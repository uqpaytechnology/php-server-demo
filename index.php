<?php
define("VIEW_PATH","app/view/");
define("DEBUG",true);
if(DEBUG){
    include 'core/Debug.php';
}
include 'core/function.php';
include 'core/core.php';
include 'app/home.php';
include 'utils/paymethod.php';
include 'vendor/autoload.php';
//spl_autoload_register('\core\core::autoload');
\core\core::run();

