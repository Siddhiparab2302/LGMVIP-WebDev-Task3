<?php

if(!isset($_SESSION)){
    session_start();
}

include('C:\wamp64\www\LGM task3\Admin\admininclude\header1.php');
include('C:\wamp64\www\LGM task3\dbConnection.php');
 if(isset($_SESSION['is_admin_login'])){
    $adminemail = $_SESSION['adminlogemail'];
 } else{
    echo "<script>location.href='../index.php'; </script>";
 }

 if(isset($_REQUEST['lessonSubmitBtn'])){
    //checking for empty fields
    if(($_REQUEST['p1'] == "")|| ($_REQUEST['p2'] == "")||
    ($_REQUEST['p3'] == "")|| ($_REQUEST['p4'] == "")|| ($_REQUEST['p5'] == ""))
    {
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $stu_roll=$_REQUEST['stu_roll'];
        $class_name = $_REQUEST['stu_class'];
        
        $p1 = (int)$_REQUEST['p1'];
        $p2 = (int)$_REQUEST['p2'];
        $p3 = (int)$_REQUEST['p3'];
        $p4 = (int)$_REQUEST['p4'];
        $p5 = (int)$_REQUEST['p5'];
        
        $marks=$p1+$p2+$p3+$p4+$p5;
        $percentage=$marks/5;
        
        $sql = "INSERT INTO result(stu_roll,class_name,p1,p2,p3,p4,p5,marks,percentage) VALUES ('$stu_roll','$class_name','$p1','$p2','$p3','$p4','$p5','$marks','$percentage')";

        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Result added successfully</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add</div>';
        }
        
    }

}

?>

<div class="col-sm-6 mt-5 mx-4 jumbotron">
    <h3 class="text-center">Add Student Result</h3>
    <form action="" method="POST" enctype="multipart/form-data">
    
        
        <div class="form-group">
            <label for="stu_roll">Student Roll</label>
            <input type="text" class="form-control" id="stu_roll" name="stu_roll">
        </div>
        <div class="form-group">
            <label for="class_name">Class Name</label>
            <?php
            $class_result=mysqli_query($conn,"SELECT class_name FROM class");
                        echo '<select name="stu_class">';
                        echo '<option selected disabled>Select Class</option>';
                    while($row = mysqli_fetch_array($class_result)){
                        $display=$row['class_name'];
                        echo '<option value="'.$display.'">'.$display.'</option>';
                    }
                    echo'</select>'
                    ?>
        </div>
        <div class="form-group">
            <label>enter sub1 marks</label>
            <input type="text" class="form-control" id="p1" name="p1">
        </div>
        <div class="form-group">
            <label >enter sub2 marks</label>
            <input type="text" class="form-control" id="p2" name="p2">
        </div>
        <div class="form-group">
            <label >enter sub3 marks</label>
            <input type="text" class="form-control" id="p3" name="p3">
        </div>
        <div class="form-group">
            <label>enter sub4 marks</label>
            <input type="text" class="form-control" id="p4" name="p4">
        </div>
        <div class="form-group">
            <label>enter sub5 marks</label>
            <input type="text" class="form-control" id="p5" name="p5">
        </div>
        
        
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="lessonSubmitBtn" name="lessonSubmitBtn">Submit</button>
            
        </div>
        <?php if(isset($msg)) {echo $msg;}?>
    </form>
</div>
</div>
</div>


<?php
include('C:\wamp64\www\LGM task3\Admin\admininclude\footer1.php');
?>