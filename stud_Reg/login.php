<?php
    include("database.php");
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        $user=$_POST['username'];
        $pass=$_POST['password'];

        $sql="SELECT* FROM student WHERE user='$user' AND password='$pass'";
        $result=mysqli_query($conn,$sql);

        if($result)
        {
            echo "login successfull";
        }
        else
        {
            echo "login failed";
        }

    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h1>LOGIN PAGE</h1>
    <form action="login.php" method="post">
        <label for="">Username</label>
        <input type="text" name="username">
        <label for="">Password</label>
        <input type="password" name="password">
        <input type="submit" name="login">
    </form>
    
</body>
</html>
