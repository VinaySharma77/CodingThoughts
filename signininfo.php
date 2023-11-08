<?php
    //create successful connection
    $con = mysqli_connect("localhost","root");
    //select database
    mysqli_select_db($con, "CodingThoughts");
    //fetch user input values
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    //sql query to insert user data
    $hash = password_hash($password, PASSWORD_DEFAULT);
    $query = "insert into signininfo(username,email,password,confirmpassword) values('$username','$email','$hash','confirmpassword')";
    // check whether this username exists
    $exists = "select * from signininfo where username='$username'";
    $result = mysqli_query($con, $exists);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        echo "<script>alert('Username already exists !!');window.location.href='index.php';</script>";
    }
    else{
        echo "<script>alert('Signned up Successfully :)');window.location.href='index.php';</script>";
    }
    //fire connection and query
    mysqli_query($con,$query);
?>