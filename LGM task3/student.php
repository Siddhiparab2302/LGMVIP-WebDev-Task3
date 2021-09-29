<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/student.css">
    <title>Result</title>
</head>
<body>
    <?php
        include('C:\wamp64\www\LGM task3\dbConnection.php');

        if(!isset($_GET['class_name']))
            $class_name=null;
        else
            $class_name=$_GET['class_name'];
            $stu_roll=$_GET['stu_roll'];

        // validation
        if (empty($class_name) or empty($stu_roll) or preg_match("/[a-z]/i",$stu_roll)) {
            if(empty($class_name))
                echo '<p class="error">Please select your class</p>';
            if(empty($stu_roll))
                echo '<p class="error">Please enter your roll number</p>';
            if(preg_match("/[a-z]/i",$stu_roll))
                echo '<p class="error">Please enter valid roll number</p>';
            exit();
        }

        $name_sql=mysqli_query($conn,"SELECT `stu_name` FROM `student1` WHERE `stu_roll`='$stu_roll' and `stu_class`='$class_name'");
        while($row = mysqli_fetch_assoc($name_sql))
        {
        $stu_name = $row['stu_name'];
        }

        $result_sql=mysqli_query($conn,"SELECT `p1`, `p2`, `p3`, `p4`, `p5`, `marks`, `percentage` FROM `result` WHERE `stu_roll`='$stu_roll' and `class_name`='$class_name'");
        while($row = mysqli_fetch_assoc($result_sql))
        {
            $p1 = $row['p1'];
            $p2 = $row['p2'];
            $p3 = $row['p3'];
            $p4 = $row['p4'];
            $p5 = $row['p5'];
            $mark = $row['marks'];
            $percentage = $row['percentage'];
        }
        if(mysqli_num_rows($result_sql)==0){
            echo "no result";
            exit();
        }
    ?>

    <div class="container">
        <div class="details">
            <span>Name:</span> <?php echo $stu_name ?> <br>
            <span>Class:</span> <?php echo $class_name; ?> <br>
            <span>Roll No:</span> <?php echo $stu_roll; ?> <br>
        </div>

        <div class="main">
            <div class="s1">
                <p>Subjects</p>
                <p>Paper 1</p>
                <p>Paper 2</p>
                <p>Paper 3</p>
                <p>Paper 4</p>
                <p>Paper 5</p>
            </div>
            <div class="s2">
                <p>Marks</p>
                <?php echo '<p>'.$p1.'</p>';?>
                <?php echo '<p>'.$p2.'</p>';?>
                <?php echo '<p>'.$p3.'</p>';?>
                <?php echo '<p>'.$p4.'</p>';?>
                <?php echo '<p>'.$p5.'</p>';?>
            </div>
        </div>

        <div class="result">
            <?php echo '<p>Total Marks:&nbsp'.$mark.'</p>';?>
            <?php echo '<p>Percentage:&nbsp'.$percentage.'%</p>';?>
        </div>

        <div class="button">
            <button onclick="window.print()">Print Result</button>
        </div>
    </div>
</body>
</html>