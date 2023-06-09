<?php
 include "inc/functions.php"
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

                <?php 
                    if (isset($_SESSION['profesori'])) {  
                        echo "<li><a href='studentet.php' class='btn' >Studentet</a></li>";
                        if ($_SESSION['profesori']['roli'] == 1) {
                           echo " <li><a href='profesoret.php' class='btn' >Profesoret</a</li>";
                           echo "<li><a href='kurset.php' class='btn' >Kurset</a></li>"; 
                        } 
                        echo "<li><a href='dalja.php' class='btn' >DALJA</a></li>";
                    }else {
                        echo "<li><a href='login.php' class='btn'>Login</a></li>";
                    }
                    ?>
           </ul>
           <span class="material-symbols-outlined" id="sidebar">
            menu
        </span>

        <label class="switch">
            <input type="checkbox" class="checkbox">
            <div class="slider"></div>
        </label>
        </nav>
    </section>