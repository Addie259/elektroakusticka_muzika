<?php
/*define("DB","elektroakustika");
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
  */
define("APP_DIR","c:/wamp64/www/final");

function __autoload($class) {
require_once APP_DIR . "/classes/".$class.".php";
   }