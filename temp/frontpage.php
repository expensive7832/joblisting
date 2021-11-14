<?php  require_once("inc/header.php"); ?>

<main id="main">
<div class="searchTab ">
    <h3 class="searchTab_title text-center text-capitalize pb-3 ">find your job</h3>

    <form action="index.php" method="GET" class="searchForm d-md-flex ">
    <select name="catSearch" id="" class="form-control mx-2 py-3">
        <option value="0">select A Category</option>
        <?php
            foreach ($categories as $category) {
                ?>
                    <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                <?php
            }
        ?>
    </select>
    <select name="typeSearch" id="" class="form-control mx-2 py-3">
        <option value="0">select JobType</option>
        <?php
            foreach ($jobTypes as $jobType) {
                ?>
                    <option value="<?php echo $jobType->id; ?>"><?php echo $jobType->jobtype; ?></option>
                <?php
            }
        ?>
    </select>
    <input type="submit" name="search" class="btn-success btn btn-md my-3 my-md-0" value="Search">
    </form>
</div>

<div class="listing ">
    <h3 class="text-center pt-3 text-primary">Available Job</h3>
    <?php 
         if($getJobs){
            foreach ($getJobs as $job) {
                ?>
                <div class="container ">
                <div class="d-flex justify-content-between align-itmes-center my-5">
                    <div class="content">
                        <div class="d-flex flex-start">
                            <small class="bg-success btn btn-sm text-white mx-2"><?php echo $job->jobType; ?></small>
                            <span class="bg-warning btn btn-sm"><?php echo $job->cname; ?></span>
                        </div>
                        <p class="pt-2 h3"><?php  echo $job->jobTitle; ?></p> 
                        <small class="desc"><?php echo $job->JobDesc; ?></small> 
                    </div>
                    <div class="readbtn">
                        <a href="jobdet.php?id=<?php echo $job->id; ?>" class="btn btn-primary btn-md">View</a>
                    </div>
                </div>
                </div>
                <?php
            }
         }else{
            echo "<h5 class='text-warning text-center mt-3'>No Available Job !</h5>";
         }       
    ?>
</div>
</main>

<?php  require_once("inc/footer.php"); ?>