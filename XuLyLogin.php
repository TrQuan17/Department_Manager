<?php
    $username=$_REQUEST['txtUser'];
    $pass=$_REQUEST['Pass'];
    if($username=="" || $pass=="")
    {
        header("Location:Login.htm");
    }
    else
    {
        $con = mysqli_connect('localhost','root','', 'qlpb');
        $result = mysqli_query($con, "SELECT * FROM admin WHERE username='$username' AND password='$pass'");
        if(mysqli_num_rows($result)==0)
        {
            header("Location:fLogin.php");
        }
        else
        {
            header("Location:MenuAdmin.html");
        }
    }
?>