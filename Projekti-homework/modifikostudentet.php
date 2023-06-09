<?php include 'inc/header.php' ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                 <h1>Modifiko Studentin</h1>
                 <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque necessitatibus aut velit ipsum cupiditate laboriosam harum.
                 </p>
                 <?php
                 if (isset($_GET['sid'])) {
                    $studentiid = $_GET['sid'];
                    $studenti=merrStudentId($studentiid);
                    if ($studenti) {
                        $studenti = mysqli_fetch_assoc($studenti);
                        $studentiid = $studenti['sid'];
                        $emri= $studenti['emri'];
                        $mbiemri = $studenti['mbiemri'];
                        $email = $studenti['emaili'];
                        $telefoni = $studenti['telefoni'];
                    }
                 }

                 if (isset($_POST['modifiko'])) {
                    $studentiid = $_POST['studentiid'];
                    modifikoStudent($_POST['studentiid'],$_POST['emri'],$_POST['mbiemri'],$_POST['telefoni'],$_POST['email']);
                 }
                 ?>

                 <form id="studenti" method="post">
            <legend>Forma per regjistrim</legend>
            <input readonly type="hidden" name="studentiid" id="studentiid" value="<?php if (!empty($studentiid)) echo $studentiid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input  type="text" name="emri" id="emri" value="<?php if (!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Mbiemri: </label>
                <input  type="text" name="mbiemri" id="mbiemri" value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input  type="text" name="telefoni" id="telefoni" value="<?php if (!empty($telefoni)) echo $telefoni; ?>">
            </fieldset>
            <fieldset>
                <label>Email: </label>
                <input  type="email" name="email" id="email" value="<?php if (!empty($email)) echo $email; ?>">
            </fieldset>
            <input type="submit" name="modifiko" id="modifiko" value="Modifiko">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>
         