<?php include 'inc/header.php' ?>

<article class="rec__info">
            <h1>What React.js Serve Us</h1>
        </article>
        
        <section class="rec__tablesection">
                 <h1>Modifiko Kurset</h1>
                 <?php
                 if (isset($_GET['kid'])) {
                    $kursiid = $_GET['kid'];
                    $kursi=merrKursId($kursiid);
                    if ($kursi) {
                        $kursi = mysqli_fetch_assoc($kursi);
                        $kursiid = $kursi['kid'];
                        $emri= $kursi['emri'];
                        $dataefillimit = $kursi['dataefillimit'];
                        $kohezgjatja = $kursi['kohezgjatja'];
                        $qmimi = $kursi['qmimi'];
                    }
                 }

                 if (isset($_POST['fshij'])) {
                    $kursi = $_POST['kursiid'];
                    fshijKurs($kursi);
                 }
                 ?>

                 <form id="kursi" method="post">
            <legend>Forma per regjistrim</legend>
            <input readonly type="hidden" name="kursiid" id="kursiid" value="<?php if (!empty($kursiid)) echo $kursiid; ?>">
            <fieldset>
                <label>Emri: </label>
                <input  disabled type="text" name="emri" id="emri" value="<?php if (!empty($emri)) echo $emri; ?>">
            </fieldset>
            <fieldset>
                <label>Data E Fillimit: </label>
                <input  disabled type="date" name="dataefillimit" id="dataefillimit" value="<?php if (!empty($dataefillimit)) echo $dataefillimit; ?>">
            </fieldset>
            <fieldset>
                <label>Kohezgjatja: </label>
                <input  disabled type="text" name="kohezgjatja" id="kohezgjatja" value="<?php if (!empty($kohezgjatja)) echo $kohezgjatja; ?>">
            </fieldset>
            <fieldset>
                <label>Qmimi: </label>
                <input  disabled type="text" name="qmimi" id="qmimi" value="<?php if (!empty($qmimi)) echo $qmimi; ?>">
            </fieldset>
            <input type="submit" name="fshij" id="fshij" value="Fshij">
        </form>
        </tbody>
        </table>
    </section>
</main>
<?php include 'inc/footer.php' ?>