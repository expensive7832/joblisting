<?php  require_once("inc/header.php"); ?>

<article id="createjob">

<form action="update.php" class="container my-3" method="POST">
            <fieldset>
                <legend class="text-primary">Update Job</legend>

                <div class="d-flex flex-column flex-md-row">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="title">Job Title</label>
                    <input value="<?php echo $getJob->jobTitle; ?>" placeholder="e.g Teaching" type="text" name="jobTitle" id="title"  class="form-control"> 
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="company">Company</label>
                    <input value="<?php echo $getJob->company; ?>" placeholder="e.g Hossanah comprehensive school" type="text" id="company" name="company"  class="form-control" required>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="location">Location</label>
                    <input value="<?php echo $getJob->Location; ?>" placeholder="e.g ilorin" type="text" id="location" name="location" class="form-control"required>
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="desc">Description</label>
                    <input value="<?php echo $getJob->JobDesc; ?>" placeholder="e.g urgently in need of a competent teacher" type="text" id="desc" name="desc"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="address">Address</label>
                    <input value="<?php echo $getJob->Address; ?>" placeholder="e.g Along Agbo Oba street, ilorin" name="address" type="text" id="address"  class="form-control"required>
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="salary">Salary</label>
                    <input value="<?php echo $getJob->salary; ?>" placeholder="e.g #30000" name="salary" type="number" id="salary"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="address">Email</label>
                    <input value="<?php echo $getJob->Email; ?>" placeholder="e.g example@gmail.com" name="email" type="email" id="email"  class="form-control">
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="salary">Phone</label>
                    <input value="<?php echo $getJob->phone; ?>" placeholder="e.g +2348166398746" name="phone" type="phone" id="phone"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="category">Select category</label>
                    <select name="category" id="category" class="form-control" required>
                         <?php
                            foreach ($categories as $category) {
                         ?>
                     <option <?php if($getJob->cat_id === $category->id) echo "selected"; ?>  value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
                        <?php
                        }
                         ?>
                    </select>
                </div>
                <div class="form-group w-100 ps-md-5">
                <label class="mx-2 h6" for="jobType">Select JobType</label>
                    <select name="jobType" id="jobType" class="form-control" required>
                    <?php
                        foreach ($jobTypes as $jobType) {
                            ?>
                                <option <?php if($getJob->jobtype_id === $jobType->id) echo "selected"; ?> value="<?php echo $jobType->id; ?>"><?php echo $jobType->jobtype; ?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group w-100">
                    <label class="mx-2 h6" for="details">Details</label>
                    <textarea  placeholder="e.g full Details attached to the job" name="details" id="details" cols="10" rows="4" class="form-control"><?php echo $getJob->Info;  ?></textarea>
                </div>
            <div class="form-group ">
                     <input name="id" type="hidden" value="<?php echo $getJob->id; ?>">
                     <input name="submit" type="submit" class="btn btn-md btn-success my-4 w-100" value="Submit Job">
                </div>

            </fieldset>
        </form>
</article>

<?php  require_once("inc/footer.php"); ?>
