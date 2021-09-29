<?php
if(!isset($_SESSION)){
    session_start();
}

include('C:\wamp64\www\LGM task3\Admin\admininclude\header1.php');
include('../dbConnection.php');
 if(isset($_SESSION['is_admin_login'])){
    $adminemail = $_SESSION['adminlogemail'];
 } else{
    echo "<script>location.href='../index.php'; </script>";
 }

//UPDATE
if(isset($_REQUEST['requpdate'])){
    //checking for empty fields
    if(($_REQUEST['class_id'] == "") || ($_REQUEST['class_name'] == "")) {
        //msg displayed if required field missing
        $msg = 'div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill all fields</div>';
    } else {
        //Assigning user values to variable
        $cid = $_REQUEST['class_id'];
        $cname = $_REQUEST['class_name'];
        
    
    $sql =  "UPDATE class SET class_id = '$cid',class_name = '$cname',
    WHERE class_id = '$cid'";
    if($conn->query($sql) == TRUE){
        //below msg delivery on form submit success
        $msg = 'div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated successfully </div>';
    } else {
        //below msg delivery on form submit failed
        $msg = 'div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update !</div>';
    }
    
    }
}

?>

<div class="col-sm-6 mt-5 mx-4 jumbotron">
    <h3 class="text-center">Update Class Details</h3>

    <?php
        if(isset($_REQUEST['view'])){
            $sql = "SELECT * FROM class WHERE class_id = {$_REQUEST['id']}";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
        }
    
    ?>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="class_id">Class ID</label>
            <input type="text" class="form-control" id="class_id" name="class_id" value="<?php if(isset($row['class_id'])) 
            {echo $row['class_id']; }?>" readonly>
        </div>
        <div class="form-group">
            <label for="class_name">Class Name</label>
            <input type="text" class="form-control" id="class_name" name="class_name" value="<?php if(isset($row['class_name'])) 
            {echo $row['class_name']; }?>">
        </div>
        
        <div class="text-center">
            <button type="submit" class="btn btn-danger" id="requpdate" name="requpdate">Update</button>
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