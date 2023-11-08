<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>HTML Introduction - Coding Thoughts</title>
    <meta name="keywords" content="html, course, tutorial, html 5, beginners, introduction">
    <meta name="description" content="Start Learning html tags, elements, anchor, example, image, list, heading">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="canonical" href="https://www.codingthoughts.in"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navigation.php'?>
    <?php include 'login.php'?>
	<?php include 'signup.php'?>
    <?php include 'sidebar.php'?>
    <?php include 'footer.php'?>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>   
<script src="js/light.js"></script>
<script src="js/menu.js"></script>
<script src="js/login.js"></script>
<script src="js/signin.js"></script>
<script type="text/javascript">
const searchcourse = () =>{
    let searchbox = document.getElementById("search").value.toUpperCase();
    let ul = document.getElementById("myUl");
    let li = document.getElementsByTagName("li");
    for(var i=0; i<li.length; i++){
        let a = li[i].getElementsByTagName("h2")[0];
        let textValue = a.textContent || a.innerHTML;
        if(textValue.toUpperCase().indexOf(searchbox) > -1){
            li[i].style.display = '';
        }
        else{
            li[i].style.display = 'none';
        }
    }
}

const signininfocondition = () =>{
    var password = document.getElementById("password").value;
    var confirmpassword = document.getElementById("confirmpassword").value;
    if(password != confirmpassword){
        alert("Enter correct password !!");
        event.preventDefault();
    }
    if(password.length < 8){
        alert("Password must be atleast 8 characters");
        event.preventDefault();
    }
}
</script>
</body>
</html>