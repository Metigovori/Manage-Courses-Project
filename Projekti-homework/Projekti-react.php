<?php include 'inc/header.php' ?>
     
    <div class="sidebar-container"></div>
    <main class="container-page">
        <section class="projektet">
            <div class="img-container">   
                <button class="slide slide-left">
                    <span class="material-symbols-outlined">
                    arrow_back_ios
                    </span>
                </button>
                <button class="slide slide-right">
                     <span class="material-symbols-outlined">
                    arrow_forward_ios
                    </span>
                </button>
                </div> 
        </section>
        <article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                 <h1>Building Applications And Systems</h1>
                 <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque necessitatibus aut velit ipsum cupiditate laboriosam harum.
                 </p>
         
            <table class="rec__table">
                <tr>
                    <td>
                        <span class="material-symbols-outlined">
                            check_circle
                            </span>
                        <h4>Components</h1>
                        <p>React components</p>
                    </td>
                    <td>
                        <span class="material-symbols-outlined">
                            check_circle
                            </span>
                        <h4>Styled Components</h1>
                        <p>For Styling</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="material-symbols-outlined">
                            check_circle
                            </span>
                        <h4>Project Experience</h1>
                        <p>Build Real Web-Applications</p>
                    </td>
                    <td>
                        <span class="material-symbols-outlined">
                            check_circle
                            </span>
                        <h4>Deploy With Firebase</h1>
                        <p>Firebase components</p>
                    </td>
                </tr>
            </table>
        </section>
    </main>

    <section class="rec__contact">
        <h1>Kontakto permes adreses ose telefonit</h1>
        <p> Na kontaktoni per gjdo informacion te nevojshem duke perdorur informatat e meposhtme. </p>

        <p>Jeni i lirshem te na kontaktoni permes telefonit apo adreses.</p>
        <hr>
        
        <div class="adress">
            <span class="material-symbols-outlined">
            location_on
            </span>
            <p>Rrruga esat mekuli,Prishtine</p>
        </div>

        <div class="adress">
            <span class="material-symbols-outlined">
                call
            </span>
            <p>+38344424467</p>
        </div>
    
    </section>
  <?php
    if (isset($_POST['shto'])) {
       shtoStudent($_POST['emri'],$_POST['mbiemri'],$_POST['telefoni'],$_POST['email'],$_POST['fjalekalimi']);
    }
  ?>

    <section class="forms"  >
    <div class="contact-form">
  <span class="heading">Contact Us</span>
  <form>
    <label for="name">Name:</label>
    <input type="text" required="">
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required="">
    <label for="message">Message:</label>
    <textarea id="message" name="message" required=""></textarea>
    <button type="submit">Submit</button>
  </form>
</div>

    </section>

    <section class="React-video">
        <h1>React Applications Don't Reload When You Change HTML Pages. </h1>
            <video src="./images/share.mp4" loop autoplay muted controls="disabled" type="video/mp4" class="banner"></video>
   </section>
    

      <section id="footer-section">
         <footer class="footer">
            <h1>
              All rights reserved by state of Kosovo 2023 <strong>&#174</strong> 
            </h1>
        </footer>
      </section>

      
       


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" ></script>
<script src="script/app.js"></script>
<script src="script/register.js"></script>
</body>
</html>