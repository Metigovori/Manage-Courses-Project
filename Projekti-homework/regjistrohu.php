<?php include 'inc/header.php' ?>

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
        <label class="switch">
            <input type="checkbox" class="checkbox">
            <div class="slider"></div>
        </label>
        </nav>
    </section>


    <?php
        if(!isset($_SESSION['profesori'])){ 
            if(isset($_POST['shto'])){
                regjistrohu($_POST['emri'],$_POST['mbiemri'],$_POST['dataelindjes'],$_POST['dataepunesimit'],$_POST['nrpersonal'],$_POST['telefoni'],$_POST['fjalekalimi'],$_POST['roli'],$_POST['email']);
            }
        }
        
        ?>


    <section class="forms"  >
       <div class="contact-form">

              <span class="heading">Regjistrohu Për Mesimdhenje</span>

              <form name="registration" id="registration" method="post">
                    <input readonly type="hidden"  name="roli" id="roli" value="0">

                    <label for="emri">Emri:</label>
                    <input type="text" id="name" name="emri" required>

                    <label for="mbiemri">Mbiemri:</label>
                    <input type="text" id="mbiemri" name="mbiemri" required>
                    

                    <label>Data E Lindjes: </label>
                    <input type="date" name="dataelindjes" id="dataelindjes">

                    <label>Data E Punesimit: </label>
                    <input type="date" name="dataepunesimit" id="dataepunesimit">

                    <label>NR.Personal : </label>
                    <input type="text" name="nrpersonal" id="nrpersonal">

                    <label>Telefoni: </label>
                    <input type="text" name="telefoni" id="telefoni">

              
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="numri">Fjalekalimi:</label>
                    <input type="password" name="fjalekalimi" id="fjalekalimi">

                    <input type="submit" name="shto" id="shto" value="Regjistrohu"></input>
              </form> 
        </div>   
    </section>
    
    <?php include "inc/footer.php" ?>