<?php

require_once "config/init.php";

$temp = new Template("temp/createjob.php");

$job = new Job();

$temp->categories = $job->getCategories();

$temp->jobTypes = $job->getJobType();

if(isset($_POST["submit"])){
    $title = $_POST["jobTitle"];
    $company = $_POST["company"];
    $loc = $_POST["location"];
    $desc = $_POST["desc"];
    $add = $_POST["address"];
    $salary = $_POST["salary"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $cat = $_POST["category"];
    $jobtype = $_POST["jobType"];
    $det = $_POST["details"];

    if($job->insertJob($title, $company, $loc, $desc, $add, $salary, $email, $phone, $cat, $jobtype, $det)){
        redirect("index.php", "Job Successfully Submitted", "success");
    }else{
        redirect("index.php", "Try Again!", "error");
    }
}



echo $temp;
?>

