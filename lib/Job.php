<?php

class Job{
    public $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function getCategories(){
        $this->db->query("SELECT * FROM categories");

      return  $this->db->fetchResults();
    }
    public function getJobType(){
        $this->db->query("SELECT * FROM jobtype");

      return  $this->db->fetchResults();
    }
    public function getJobs(){
        $this->db->query("SELECT jobs.*, categories.name AS cname, jobtype.jobtype AS jobType
        FROM jobs
        INNER JOIN categories ON jobs.cat_id = categories.id
        INNER JOIN jobtype ON jobs.jobtype_id = jobtype.id
        ORDER BY jobs.datePosted DESC
        ");

      return  $this->db->fetchResults();
    }

    public function getJobById($id){
        $this->db->query("SELECT jobs.*, categories.name AS cname, jobtype.jobtype AS jobType
        FROM jobs
        INNER JOIN categories ON jobs.cat_id = categories.id
        INNER JOIN jobtype ON jobs.jobtype_id = jobtype.id
        WHERE jobs.id = :id
        ");

        $this->db->bind(":id", $id);

      return $this->db->fetchSingle();
    }

    public function getSearch($cat, $jobType){
        $this->db->query("SELECT jobs.*, categories.name AS cname, jobtype.jobtype AS jobType
        FROM jobs
        INNER JOIN categories ON jobs.cat_id = categories.id
        INNER JOIN jobtype ON jobs.jobtype_id = jobtype.id
        WHERE cat_id = :cat OR jobtype_id = :jobtype
        ");

        $this->db->bind(":cat", $cat);
        $this->db->bind(":jobtype", $jobType);

        return $this->db->fetchResults();
}

    public function singleJob($id){
        $this->db->query("SELECT jobs.*, categories.name AS cname, jobtype.jobtype AS jobType
        FROM jobs
        INNER JOIN categories ON jobs.cat_id = categories.id
        INNER JOIN jobtype ON jobs.jobtype_id = jobtype.id
        WHERE jobs.id = :id
        ");

        $this->db->bind(":id", $id);
    

        return $this->db->fetchSingle();
}
    public function deleteJob($id){
        $this->db->query(" DELETE FROM jobs WHERE id = :id" );

        $this->db->bind(":id", $id);
    

        $res = $this->db->execute();
        if($res){
            return true;
        }else{
            return false;
        }
}

public function insertJob($title, $company, $loc, $desc, $add, $salary, $email, $phone, $cat, $jobtype, $det){
    $this->db->query("INSERT INTO jobs SET
        jobTitle = :jt,
        company = :comp,
        Location = :loc,
        JobDesc = :jd,
        Address = :add,
        salary = :salary,
        Email = :email,
        phone = :ph,
        cat_id = :cid,
        jobtype_id =:jid,
        info = :det
    ");

    $this->db->bind(":jt", $title);
    $this->db->bind(":comp", $company);
    $this->db->bind(":loc", $loc);
    $this->db->bind(":jd", $desc);
    $this->db->bind(":add", $add);
    $this->db->bind(":salary", $salary);
    $this->db->bind(":email", $email);
    $this->db->bind(":ph", $phone);
    $this->db->bind(":cid", $cat);
    $this->db->bind(":jid", $jobtype);
    $this->db->bind(":det", $det);

 $result = $this->db->execute();

 if($result){
    return true;
}else{
    return false;
}

}

public function updateJob($title, $company, $loc, $desc, $add, $salary, $email, $phone, $cat, $jobtype, $det, $id){
    $this->db->query("UPDATE jobs SET
        jobTitle = :jt,
        company = :comp,
        Location = :loc,
        JobDesc = :jd,
        Address = :add,
        salary = :salary,
        Email = :email,
        phone = :ph,
        cat_id = :cid,
        jobtype_id =:jid,
        info = :det
        WHERE id =:id
    ");

    $this->db->bind(":jt", $title);
    $this->db->bind(":comp", $company);
    $this->db->bind(":loc", $loc);
    $this->db->bind(":jd", $desc);
    $this->db->bind(":add", $add);
    $this->db->bind(":salary", $salary);
    $this->db->bind(":email", $email);
    $this->db->bind(":ph", $phone);
    $this->db->bind(":cid", $cat);
    $this->db->bind(":jid", $jobtype);
    $this->db->bind(":det", $det);
    $this->db->bind(":id", $id);

 $result = $this->db->execute();

 if($result){
    return true;
}else{
    return false;
}

}

}

?>