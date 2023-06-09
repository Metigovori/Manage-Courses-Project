<?php include "inc/header.php" ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                <h1>Shto Profesor</h1>
                <a href="shtoProfesor.php" class="material-symbols-outlined" id="add-btn">
                add_circle
                </a>


            <table class="rec__table">
                <tr>
                    <td>
                        <h1>Emri Dhe Mbiemri</h1>
                    </td>
                    <td>
                    <h1>Numri Personal</h1>
                    </td>
                    <td>
                    <h1>Data E Punesimit</h1>
                    </td>
                    <td>
                    <h1>Numri I Telefonit</h1>
                    </td>
                </tr>
                <?php 
                $res = merrProfesoret();
                if (mysqli_num_rows($res) > 0) {
                    $i=0;
                    while ($profesori = mysqli_fetch_assoc($res)) {
                        if ($i%2 ==0) { echo"<tr>"; }
                        else{echo"<tr>"; }
                        $profesoriid = $profesori['pid'];
                        echo"<td>" . $profesori["emri"] . " " . $profesori["mbiemri"] . "</td>";
                       echo "<td>" . $profesori["nrpersonal"] . "</td>";
                       echo "<td>" . $profesori["dataepunesimit"] . "</td>";
                       echo "<td>" . $profesori["telefoni"] . "</td>";
                       echo "<td><a href='modifikoProfesoret.php?pid={$profesoriid}' > Edit </a></td>";
                       echo "<td><a href='fshijProfesor.php?pid={$profesoriid}' > Delete </a></td>";
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