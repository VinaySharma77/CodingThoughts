<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Web Development Tutorial - Coding Thoughts</title>
    <meta name="keywords" content="web development tutorial, online course website design, development courses, online courses full stack developer, online course of web development, online course of web designing, website development course free, web development courses free, HTML,CSS,JavaScript,Java,MySQL,PLSQL,PHP">
    <meta name="description" content="Free tutorials to learn web development. Start learning all popular courses like HTML,CSS,JavaScript,Java,MySQL,PLSQL,PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="logo.svg">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
</head>
<body>
    <?php include 'navigation.php'?>
    <div class="box">
        <h1 class="main-head">Web Development Tutorial</h1>
        <p class="typing">Let's begin your coding journey</p>
        <div class="search-box" id="search-box">
            <input type="text" placeholder="Search courses..." autocomplete="off" id="search" onkeyup="searchcourse()">
            <ion-icon name="search-outline" class="searchicon"></ion-icon>
        </div>
        <div class="courses">
            <p class="explore">Explore Courses</p>
            <ul id="myUl">
                <li>
                    <div class="course">
                        <h2>HTML</h2>
                        <p>HTML is used to create web pages. It is used to create a website structure.</p>
                        <a href="html-course.php">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>CSS</h2>
                        <p>CSS is used to style web pages. It is a stylesheet that is used to style a website.</p>
                        <a href="#">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>JavaScript</h2>
                        <p>JavaScript is used to create dynamic web pages. It is a scripting language.</p>
                        <a href="#">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>Java</h2>
                        <p>Java is a programming language. It is used to develop various games, web applications and desktop application.</p>
                        <a href="#">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>MySQL</h2>
                        <p>MySQL is relational database management system. It is open source language.</p>
                        <a href="#">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>PLSQL</h2>
                        <p>PLSQL is Procedural Language. It is used to create procedures for databases.</p>
                        <a href="#">Start Learning</a>
                    </div>
                </li>
                <li>
                    <div class="course">
                        <h2>PHP</h2>
                        <p>PHP is server side language. It is used to create server side web pages.</p>
                        <a href="php-intro.php">Start Learning</a>
                    </div>
                </li>
            </ul>
        </div>
        <?php include 'login.php'?>
        <?php include 'signup.php'?>
    </div>
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