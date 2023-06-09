<?php
include "inc/functions.php";
   if(isset($_POST['login'])){
    //print_r($_POST);
    login($_POST['email'],$_POST['fjalekalimi']);
   }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>React-Kosova</title>
    <link rel="stylesheet" href="style/students.css">
    <link rel="stylesheet" href="style/index.css">
    <link rel="stylesheet" href="style/regjistrohu.css">
    <link rel="stylesheet" href="style/regjistrohu_header.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="style/header.css">
    <link rel="stylesheet" href="style/react-video.css">
    <link rel="stylesheet" href="symbols.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style/footer.css">
    <script src="script/jquery.js"></script>
</head>
<body>
    <section id="section">
        <nav class="container">
            <a id="logo" href="Projekti-react.php"><img src="images/logo (1).png" alt="">
            </a>
            <ul id="navbar">
                <li><button onclick="location.href='Projekti-react.php'" class="btn" >Home</button></button></li>
            </ul>
        </nav>
    </section>





    <section class="forms"  >
       <div class="contact-form">


              <form name="registration" id="registration" method="post">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    <label for="numri">Fjalekalimi:</label>
                    <input type="password" name="fjalekalimi" id="fjalekalimi">
                    <button type="submit" name="login" id="login" value="Login">Login</button>
                    
                    <div id='regjistrohu'>
                    <span >Nuk keni akoma Account?</span><br> <a href="regjistrohu.php" class="btn">Regjistrohu</a> <br>
                   </div>
              </form> 
        </div>   
    </section>

    
