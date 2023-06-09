<?php include 'inc/header.php' ?>

<article class="rec__info">
          
        </article>
        
        <section class="rec__tablesection">
    <h1>Shto Student</h1>

    <?php
    if (isset($_POST['shto'])) {
        shtoStudent($_POST['emri'],$_POST['mbiemri'],$_POST['telefoni'],$_POST['email'],$_POST['kid']);
    }
    ?>

    <form id="studenti" method="post">
        <legend>Forma per regjistrim</legend>
        <fieldset>
            <label>Emri: </label>
            <input  type="text" name="emri" id="emri"  >
        </fieldset>
        <fieldset>
            <label>Mbiemri: </label>
            <input  type="text" name="mbiemri" id="mbiemri" >
        </fieldset>
        <fieldset>
            <label>Telefoni: </label>
            <input  type="text" name="telefoni" id="telefoni" >
        </fieldset>
        <fieldset>
            <label>Email: </label>
            <input  type="email" name="email" id="email" >
        </fieldset>
        <fieldset>
            <label>Kursi: </label>
            <select name="kid" id="kid">
                <?php
                    $kurset = merrKurset();
                    while ($row = mysqli_fetch_assoc($kurset)) {
                        echo "<option value='".$row['emri']."'>".$row['emri']."</option>";
                    }
                ?>
            </select>
        </fieldset>
        <input type="submit" name="shto" id="shto" value="Shto">
    </form>
    </tbody>
    </table>
</section>

<?php include 'inc/footer.php' ?>