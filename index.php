<?php

require_once "config/init.php";

$temp = new Template("temp/frontpage.php");

$job = new Job();

$temp->categories = $job->getCategories();

$temp->jobTypes = $job->getJobType();

if(isset($_GET["search"])){
    $cat = $_GET["catSearch"];
    $jobType = $_GET["typeSearch"];

    $temp->getJobs = $job->getSearch($cat, $jobType);
    
}
else{
    
$temp->getJobs = $job->getJobs();
}



echo $temp;
?>

