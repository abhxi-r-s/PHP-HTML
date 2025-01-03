<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $tname=$_POST['tname'];
        $sub=$_POST['subject'];
        $no=$_POST['nos'];

        $sql="INSERT INTO teacher(tname,subject,nos) VALUES('$tname','$sub','$no')";
        $result=mysqli_query($conn,$sql);
        if($result)
        {
            header('Location:teacherlogin.php');

        }
        else
        {
            echo "failed to update data";
        }
    }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Details</title>
</head>
<body>
    <form action="teacher.php" method="post">

        <label for="">Teacher Name :</label>
        <input type="text" name="tname">
        <label for="">Subject:</label>
        <input type="text" name="subject">
        <label for="">Number of Students :</label>
        <input type="number" name="nos">
        <input type="submit">
    
    </form>
    
</body>
</html>