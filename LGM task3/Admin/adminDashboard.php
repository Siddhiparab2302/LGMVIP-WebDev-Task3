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
$sql= "SELECT *FROM class";
$result=$conn->query($sql);
$totalclass = $result->num_rows;

$sql="SELECT * FROM student1";
$result=$conn->query($sql);
$totalstu = $result->num_rows;
?>
<div class="col-sm-9 mt-2">
    <div class="text-center">
        <div class=" mt-5">
            <div class="card text-white bg-danger mb-3" style="max-width:18rem;">
                        <div class="card-header">Class</div>
                        <div class="card-body">
                            <h4 class="card-title">
                                <?php echo $totalclass;?>
                            </h4>
                            <a class="btn text-white" href="class1.php">View</a>
                        </div>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="card text-white bg-success mb-3" style="max-width:18rem;">
                        <div class="card-header">Students</div>
                        <div class="card-body">
                            <h4 class="card-title">
                            <?php echo $totalstu;?>
                            </h4>
                            <a class="btn text-white" href="students.php">View</a>
                        </div>
                        </div>
                    </div>
                    
                
            </div>
        </div>
    </div>
</div><!--div row close from header-->
</div><!--div container-fluid close from header--> 


<?php
include('C:\wamp64\www\LGM task3\Admin\admininclude\footer1.php');
?>