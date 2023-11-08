<?php
    $login = false;
    //create successful connection
    $con = mysqli_connect("localhost","root");
    //select database
    mysqli_select_db($con,"CodingThoughts");
    //fetch user input
    $username = $_POST["username"];
    $password = $_POST["password"];
    //sql query to match user data with database
    $query = "select * from signininfo where username='$username'";
    $result = mysqli_query($con,$query);
    $num = mysqli_num_rows($result);
    if($num == 1){
        while($row=mysqli_fetch_assoc($result)){
            if(password_verify($password, $row['password'])){
                $login = true;
                echo "<script>alert('You are Logged in Successfully :)');window.location.href='index.php';</script>";
            }
            else{
                echo "<script>alert('Invalid Credentials !!');</script>";
            }
        }
    }
    //fire connection and query
    mysqli_query($con,$query);
?>