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


if(isset($_REQUEST['classSubmitBtn'])){
    //checking for empty fields
    if(($_REQUEST['class_name'] == "")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill all fields</div>';
    } else {
        $class_name = $_REQUEST['class_name'];
        

        $sql = "INSERT INTO class (class_name) VALUES 
        ('$class_name')";

        if($conn->query($sql) == TRUE){
            $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">class Added Successfully</div>';
        } else {
            $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Unable to add</div>';
        }
        
    }

}

?>

<div class="col-sm-6 mt-5 mx-4 jumbotron">
    <h3 class="text-center">Add New class</h3>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="class_name">class Name</label>
            <input type="text" class="form-control" id="class_name" name="class_name" >
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="classSubmitBtn" name="classSubmitBtn">Submit</button>
            <a href="class1.php" class="btn btn-secondary">Close</a>
        </div>
        <?php if(isset($msg)) {echo $msg;}?>
    </form>
</div>
</div>
</div>


<?php
include('C:\wamp64\www\LGM task3\Admin\admininclude\footer1.php');
?>