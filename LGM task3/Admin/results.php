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

?>

<div class="col-sm-9 mt-5">
<!--Table-->
    <p class="bg-dark text-white p-2">Student's Result</p>
    <?php
    $sql = "SELECT * FROM result";
    $result = $conn->query($sql);
    if($result->num_rows > 0){

    ?>  
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Student Roll No</th>
                    <th scope="col">Student's Class</th>
                    <th scope="col">sub1 marks</th>
                    <th scope="col">sub2 marks</th>
                    <th scope="col">sub3 marks</th>
                    <th scope="col">sub4 marks</th>
                    <th scope="col">sub5 marks</th>
                    <th scope="col">Total marks</th>
                    <th scope="col">Percentage</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
               <?php while($row = $result->fetch_assoc()){ 
                echo '<tr>';
                    echo'<th scope="row">'.$row['stu_roll'].'</th>';
                    echo'<td>'.$row['class_name'].'</td>';
                    echo'<td>'.$row['p1'].'</td>';
                    echo'<td>'.$row['p2'].'</td>';
                    echo'<td>'.$row['p3'].'</td>';
                    echo'<td>'.$row['p4'].'</td>';
                    echo'<td>'.$row['p5'].'</td>';
                    echo'<td>'.$row['marks'].'</td>';
                    echo'<td>'.$row['percentage'].'</td>';
                    echo'<td>';
                    echo'
                
                    <form action="" method="POST" class="d-inline">
                    <input type="hidden" name="id" value='.$row["stu_roll"].'> 
                        <button type="submit" class="btn btn-info mr-3" name="delete" value="Delete"><i class="far fa-trash-alt"></i></button>
                    </form>
                </td>
            </tr>';
            } ?>   
            </tbody>
        </table>
<?php } else{
    echo "0 Result";
} 
if(isset($_REQUEST['delete'])){
    $sql = "DELETE FROM result WHERE stu_roll = {$_REQUEST['id']} ";
    if($conn->query($sql) == TRUE){
        echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
    } else {
        echo "Unable to delete Data";
    }
}


?>
</div>
</div>
<!--div row close from header-->

<div>
    <a class="btn btn-danger box" href="./addresult.php"><i class="fas fa-plus fa-2x"></i></a>
</div>
</div>
<!--div container-fluid close from header-->


<?php
include('C:\wamp64\www\LGM task3\Admin\admininclude\footer1.php');
?>