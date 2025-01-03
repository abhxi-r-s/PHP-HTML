<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user=$_POST['username'];
        $rollno=$_POST['rollno'];
        $pass=$_POST['password'];

        $sql="INSERT INTO student(rollno,user,password) VALUES('$rollno','$user','$pass')";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "You are registered";
        }
        else{
            echo "You are not registered";
        }
        
               
    }
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <form action="registration.php" method="post">

    <label for="">Username :</label>
    <input type="text" name="username">
    <label for="">Roll No :</label>
    <input type="text" name="rollno">
    <label for="">Password :</label>
    <input type="password" name="password">
    <input type="submit" name="submit">

    </form>
    
</body>
</html>

