<?php include 'inc/header.php' ?>

<article class="rec__info">
        
        </article>
        
        <section class="rec__tablesection">
                 <h1>Shto Profesor</h1>
                 <?php
                 if (isset($_POST['shto'])) {
                    shtoProfesor($_POST['emri'],$_POST['mbiemri'],$_POST['nrpersonal'],$_POST['dataepunesimit'],$_POST['telefoni']);
                 }
                 ?>

                 <form id="studenti" method="post">
            <legend>Forma per regjistrim</legend>
            <fieldset>
                <label>Emri: </label>
                <input  type="text" name="emri" id="emri" >
            </fieldset>
            <fieldset>
                <label>Mbiemri: </label>
                <input  type="text" name="mbiemri" id="mbiemri" >
            </fieldset>
            <fieldset>
                <label>Nr.Personal: </label>
                <input  type="text" name="nrpersonal" id="nrpersonal">
            </fieldset>
            <fieldset>
                <label>Data: </label>
                <input  type="date" name="dataepunesimit" id="dataepunesimit" ">
            </fieldset>
            <fieldset>
                <label>Telefoni: </label>
                <input  type="text" name="telefoni" id="telefoni" >
            </fieldset>
            <input type="submit" name="shto" id="shto" value="Shto">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>
         