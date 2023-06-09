<?php include 'inc/header.php' ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                 <h1>Fëshij Studentin</h1>
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
                        $fjalekalimi = $studenti['fjalekalimi'];
                    }
                 }

                 if (isset($_POST['fshij'])) {
                    $studentiid = $_POST['studentiid'];
                    fshijStudent($studentiid);
                 }
                 ?>

                 <form id="studenti" method="post">
            <legend>Forma per regjistrim</legend>
            <input readonly type="hidden" name="studentiid" id="studentiid" value="<?php if (!empty($studentiid)) echo $studentiid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input disabled type="text" name="emri" id="emri" value="<?php if (!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Mbiemri: </label>
                <input disabled type="text" name="mbiemri" id="mbiemri" value="<?php if (!empty($mbiemri)) echo $mbiemri; ?>">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input disabled type="text" name="telefoni" id="telefoni" value="<?php if (!empty($telefoni)) echo $telefoni; ?>">
            </fieldset>
            <fieldset>
                <label>Email: </label>
                <input disabled type="email" name="email" id="email" value="<?php if (!empty($email)) echo $email; ?>">
            </fieldset>
            <fieldset>
                <label>Fjalekalimi: </label>
                <input disabled type="password" name="fjalekalimi" id="fjalekalimi" value="<?php if (!empty($fjalekalimi)) echo $fjalekalimi; ?>">
            </fieldset>
            <input type="submit" name="fshij" id="fshij" value="Fshije">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>
         
  