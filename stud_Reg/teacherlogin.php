<?php
include("database.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $tname=$_POST['tname'];
    $no=$_POST['nos'];

    $sql="SELECT * FROM teacher WHERE tname='$tname' AND nos='$no'";
    $result=mysqli_query($conn,$sql);

    if($result->num_rows>0)
    {
        while($rows=$result->fetch_assoc())
        {
            echo $rows['tname'];
        }
    }
    else
    {
        echo "invalid data";
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Login</title>
</head>
<body>
    <form action="teacherlogin.php" method="post">
        <label for="">Teacher Name :</label>
        <input type="text" name="tname">
        <label for="">Number of students :</label>
        <input type="number" name="nos">
        <input type="submit" name="login">

    </form>
    
</body>
</html>