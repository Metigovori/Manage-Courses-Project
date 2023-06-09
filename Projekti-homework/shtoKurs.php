<?php include 'inc/header.php' ?>

<article class="rec__info">

        </article>
        
        <section class="rec__tablesection">
                 <h1>shto Kurs</h1>
                 <?php
                 if (isset($_POST['shto'])) {
                    shtoKurs($_POST['emri'],$_POST['dataefillimit'],$_POST['kohezgjatja'],$_POST['qmimi']);
                 }
                 ?>

                 <form id="kursi" method="post">
            <legend>Forma per regjistrim</legend>
            <fieldset>
                <label>Emri: </label>
                <input  type="text" name="emri" id="emri" >
            </fieldset>
            <fieldset>
                <label>Data E Fillimit: </label>
                <input  type="date" name="dataefillimit" id="dataefillimit" >
            </fieldset>
            <fieldset>
                <label>Kohezgjatja: </label>
                <input  type="text" name="kohezgjatja" id="kohezgjatja" >
            </fieldset>
            <fieldset>
                <label>Qmimi: </label>
                <input  type="text" name="qmimi" id="qmimi">
            </fieldset>
            <input type="submit" name="shto" id="shto" value="Shto Kurs">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>