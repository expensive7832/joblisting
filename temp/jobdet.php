<?php  require_once("inc/header.php"); ?>

<div class="container">
<section id="section">
<ul class="list-group">
            <div class=" list-group-item my-2 d-flex justify-content-between">
            <li class="bg-success text-white p-2" style="border-radius:3rem;"><?php echo $job->jobType; ?></li>
            <li class="lead fw-bold"><?php echo $job->cname; ?></li>
            <li class="bg-success text-white p-2" style="border-radius:3rem;" ><?php echo $job->datePosted; ?></li>
            </div>
            <h5>Job Title</h5> <li class="list-group-item my-2"><?php echo $job->jobTitle; ?></li>
            <h5>Company</h5> <li class="list-group-item my-2"><?php echo $job->company; ?></li>
            <h5>Description</h5>  <li class="list-group-item my-2"><?php echo $job->Info; ?></li>
            <h5>Salary</h5>  <li class="list-group-item my-2">#<?php echo $job->salary; ?></li>
            <h5>Address</h5> <li class="list-group-item my-2"><?php echo $job->Address; ?></li>
           <div class="d-flex list-group-item my-2">
           <li class="mx-2"><a class="text-dark" href="mailto:<?php echo $job->Email; ?>"><i class="fas fa-envelope mx-1"></i><?php echo $job->Email; ?></a></li>
           <li class="mx-2"><a class="text-dark" href="tel:<?php echo $job->phone; ?>"><i class="fas fa-phone mx-1"></i><?php echo $job->phone; ?></a></li>
        </div>
            
        </ul>

        <div class="d-flex my-3">
            <a href="deletejob.php?del_id=<?php echo $job->id; ?>" class="btn btn-md btn-danger mx-2">Delete</a>
            <a href="update.php?id=<?php echo $job->id; ?>" class="btn btn-md btn-success mx-2">Update</a>
        </div>
</section>
</div>

<?php  require_once("inc/footer.php"); ?>