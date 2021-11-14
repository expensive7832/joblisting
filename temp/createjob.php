<?php  require_once("inc/header.php"); ?>

<article id="createjob">

<form action="createjob.php" class="container my-3" method="POST">
            <fieldset>
                <legend class="text-primary">Submit Job</legend>

                <div class="d-flex flex-column flex-md-row">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="title">Job Title</label>
                    <input placeholder="e.g Teaching" type="text" name="jobTitle" id="title"  class="form-control"> 
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="company">Company</label>
                    <input placeholder="e.g Hossanah comprehensive school" type="text" id="company" name="company"  class="form-control" required>
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="location">Location</label>
                    <input placeholder="e.g ilorin" type="text" id="location" name="location" class="form-control"required>
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="desc">Description</label>
                    <input placeholder="e.g urgently in need of a competent teacher" type="text" id="desc" name="desc"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="address">Address</label>
                    <input placeholder="e.g Along Agbo Oba street, ilorin" name="address" type="text" id="address"  class="form-control"required>
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="salary">Salary</label>
                    <input placeholder="e.g #30000" name="salary" type="number" id="salary"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="address">Email</label>
                    <input placeholder="e.g example@gmail.com" name="email" type="email" id="email"  class="form-control">
                </div>
                <div class="form-group w-100 ps-md-5">
                    <label class="mx-2 h6" for="salary">Phone</label>
                    <input placeholder="e.g +2348166398746" name="phone" type="phone" id="phone"  class="form-control">
                </div>
            </div>
            <div class="d-flex flex-column flex-md-row ">
                <div class="form-group w-100 ">
                    <label class="mx-2 h6" for="category">Select category</label>
                    <select name="category" id="category" class="form-control" required>
                         <?php
                            foreach ($categories as $category) {
                         ?>
                     <option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
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
                                <option value="<?php echo $jobType->id; ?>"><?php echo $jobType->jobtype; ?></option>
                            <?php
                        }
                    ?>
                    </select>
                </div>
            </div>

            <div class="form-group w-100">
                    <label class="mx-2 h6" for="details">Details</label>
                    <textarea placeholder="e.g full Details attached to the job" name="details" id="details" cols="10" rows="4" class="form-control"></textarea>
                </div>
            <div class="form-group ">
                     <input name="submit" type="submit" class="btn btn-md btn-success my-4 w-100" value="Submit Job">
                </div>

            </fieldset>
        </form>
</article>

<?php  require_once("inc/footer.php"); ?>
