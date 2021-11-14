<?php

require_once "config/init.php";

$temp = new Template("temp/update.php");

$job = new Job();

$temp->categories = $job->getCategories();

$temp->jobTypes = $job->getJobType();

if(isset($_GET["id"])){
    $id = $_GET["id"];

    $temp->getJob = $job->getJobById($id);
}

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
    $id = $_POST["id"];

    if($job->updateJob($title, $company, $loc, $desc, $add, $salary, $email, $phone, $cat, $jobtype, $det, $id)){
        redirect("index.php", "Job Successfully Updated", "success");
    }else{
        redirect("index.php", "Failed To Update. Try Again!", "error");
    }
}




echo $temp;
?>

