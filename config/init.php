<?php
session_start();

require_once("./helper/helper_file.php");
require("config.php");

spl_autoload_register("autoLoader");

function autoLoader($className){
    return include "lib/" . $className . ".php";
}


?>