<?php include "inc/header.php" ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                <h1>Shto Kurs</h1>
                <a href="shtoKurs.php" class="material-symbols-outlined" id="add-btn">
                add_circle
                </a>
            <table class="rec__table">
                <tr>
                    <td>
                        <h1>Emri I Kursit</h1>
                    </td>
                    <td>
                        <h1>Data E Fillimit</h1>
                    </td>
                    <td>
                    <h1>Kohezgjatja</h1>
                    </td>
                    <td>
                    <h1>Qmimi</h1>
                    </td>
                </tr>
                <?php 
                $res = merrKurset();
                if (mysqli_num_rows($res) > 0) {
                    $i=0;
                    while ($kursi = mysqli_fetch_assoc($res)) {
                        if ($i%2 ==0) { echo"<tr>"; }
                        else{echo"<tr>"; }
                        $kursiid = $kursi['kid'];
                        echo"<td>" . $kursi["emri"] . "</td>";
                        echo"<td>" . $kursi["dataefillimit"] . "</td>";
                       echo "<td>" . $kursi["kohezgjatja"] . "</td>";
                       echo "<td>" . $kursi["qmimi"] . "</td>";
                       echo "<td><a href='modifikoKurs.php?kid={$kursiid}' > Edit </a></td>";
                       echo "<td><a href='fshijKurs.php?kid={$kursiid}' > Delete </a></td>";
                       echo "</tr>";
                       $i++;
                    } 
                }else {
                        echo "Nuk ka shenime";
                    }
                
                
                ?>
         
            </table>
            
        </section>
    </main>
    <?php include 'inc/footer.php' ?>