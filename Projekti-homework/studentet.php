<?php include "inc/header.php" ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>

        
        <section class="rec__tablesection">
               <h1>Shto Student</h1>
                <a href="shtoStudent.php" class="material-symbols-outlined" id="add-btn">
                add_circle
                </a>
        <form method="get" action="" class="searchbar">
        <input type="text" name="search" class="searchbar_i" placeholder="Kerko studentin...">
        <button type="submit" class="searchbar_b">Kerko</button>
    </form>
         
            <table class="rec__table">
                <tr>
                    <td>
                        <h1>Emri dhe Mbiemri</h1>
                    </td>
                    <td>
                        <h1>Email</h1>
                    </td>
                    <td>
                    <h1>Numri I Telefonit</h1>
                    </td>
                    <td>
                    <h1>Kursi</h1>
                    </td>
                </tr>
    <?php 

    if(isset($_GET['search'])) {
       $keyword = $_GET['search'];
       kerkoStudent($keyword);
  } else {
      $res = merrStudentet();
      if (mysqli_num_rows($res) > 0) {
         $i=0;
        while ($studenti = mysqli_fetch_assoc($res)) {
         if ($i%2 ==0) { echo"<tr>"; }
          else{echo"<tr>"; }
          $studentiid = $studenti['sid'];
          echo"<td>" . $studenti["emri"] . " " . $studenti["mbiemri"] . "</td>";
          echo "<td>" . $studenti["emaili"] . "</td>";
          echo "<td>" . $studenti["telefoni"] . "</td>";
          echo "<td>" . $studenti["kursi_emri"] . "</td>";
          echo "<td><a href='modifikostudentet.php?sid={$studentiid}' class='btni'> Edit </a></td>";
          echo "<td><a href='fshijstudent.php?sid={$studentiid}' class='btni'> Delete </a></td>";
          echo "</tr>";
          $i++;
          } 
     }else {
      echo "Nuk ka shenime";
          }
                
    }
   ?>
                
            </table>
        </section>
    </main>
    <?php include 'inc/footer.php' ?>