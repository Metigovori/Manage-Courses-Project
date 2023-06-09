<?php include 'inc/header.php' ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                 <h1>Modifiko Profesoret</h1>
                 <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque necessitatibus aut velit ipsum cupiditate laboriosam harum.
                 </p>
                 <?php
                 if (isset($_GET['pid'])) {
                    $profesoriid = $_GET['pid'];
                    $profesori=merrProfesorId($profesoriid);
                    if ($profesori) {
                        $profesori = mysqli_fetch_assoc($profesori);
                        $profesoriid = $profesori['pid'];
                        $emri= $profesori['emri'];
                        $mbiemri = $profesori['mbiemri'];
                        $nrpersonal = $profesori['nrpersonal'];
                        $dataepunesimit = $profesori['dataepunesimit'];
                        $telefoni = $profesori['telefoni'];
                    }
                 }

                 if (isset($_POST['modifiko'])) {
                    $profesoriid = $_POST['profesoriid'];
                    modifikoProfesor($_POST['profesoriid'],$_POST['emri'],$_POST['mbiemri'],$_POST['nrpersonal'],$_POST['dataepunesimit'],$_POST['telefoni']);
                 }
                 ?>

                 <form id="studenti" method="post">
            <legend>Forma per regjistrim</legend>
            <input readonly type="hidden" name="profesoriid" id="profesoriid" value="<?php if (!empty($profesoriid)) echo $profesoriid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input  type="text" name="emri" id="emri" value="<?php if (!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Mbiemri: </label>
                <input  type="text" name="mbiemri" id="mbiemri" value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>">
            </fieldset>
            <fieldset>
                <label>Nr.Personal: </label>
                <input  type="text" name="nrpersonal" id="nrpersonal" value="<?php if (!empty($nrpersonal)) echo $nrpersonal; ?>">
            </fieldset>
            <fieldset>
                <label>Data: </label>
                <input  type="date" name="dataepunesimit" id="dataepunesimit" value="<?php if (!empty($dataepunesimit)) echo $dataepunesimit; ?>">
            </fieldset>
            <fieldset>
                <label>Fjalekalimi: </label>
                <input  type="text" name="telefoni" id="telefoni" value="<?php if (!empty($telefoni)) echo $telefoni; ?>">
            </fieldset>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>
         