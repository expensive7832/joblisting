<?php

require_once "config/init.php";

$temp = new Template("temp/jobdet.php");

$job = new Job;

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $temp->job = $job->singleJob($id);
}

if(isset($_GET["del_id"])){
    $id = $_GET["del_id"];

 if($job->deleteJob($id)){
    true;
 }else{
    false;
 }
}

echo $temp;
?>

