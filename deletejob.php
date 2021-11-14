<?php

require_once "config/init.php";

$temp = new Template("temp/deletejob.php");

$job = new Job;

if(isset($_GET["del_id"])){
    $id = $_GET["del_id"];

 if($job->deleteJob($id)){

    redirect("index.php", "Job Successfully Deleted","error");
 }else{

   redirect("index.php", "Fail To Delete","error");
 }
}

echo $temp;
?>

