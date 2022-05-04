<?php include __DIR__ . '/first.php' ?>
<div class="container">
    <div class="row">
        <form action="/public/index.php" method="POST">
            <?php
            if(isset($_GET['update'])){
            echo '<div>
                    <input hidden type="text"  name="update" value="'.$_GET['update'].'">
                 </div>';
            }
            else{
                echo '<div>
                    <input hidden type="text"  name="insert" value="on">
                 </div>';
            }
            ?>
            <div class="container mt-4" style="width: 400px;">
                <div class="row text-center">
                    <div class="col" style="margin-bottom: 5px;">
                        <input type="text" name="cod_card" required placeholder="cod_card" value="<?php if(isset($_GET['update'])){echo $_GET['update'];} ?>" <?php if(isset($_GET['update'])){echo 'disabled';} ?>>
                    </div>
                    <div class="col" style="margin-bottom: 5px;">
                        <input type="text" name="nome" required placeholder="nome" value="<?php if(isset($_GET['update'])){echo $_POST['result']['nome'];} ?>">
                    </div>
                    <div class="col" style="margin-bottom: 5px;">
                        <input type="text" name="cognome" required placeholder="cognome" value="<?php if(isset($_GET['update'])){echo $_POST['result']['cognome'];} ?>">
                    </div>
                    <div class="col" style="margin-bottom: 5px;">
                        <input type="text" name="lugo_N" required placeholder="luogo di nascita" value="<?php if(isset($_GET['update'])){echo $_POST['result']['lugo_N'];} ?>">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col" style="margin-bottom: 5px;">
                        <input type="date" name="data_N" required value="<?php if(isset($_GET['update'])){echo $_POST['result']['data_N'];} ?>">
                    </div>
                    <div class="col">
                        <select name="genere" >
                            <option value="M" <?php if(isset($_GET['update'])){if($_POST['result']['genere'] == 'm'){echo 'selected';}} ?>>Uomo</option>
                            <option value="F" <?php if(isset($_GET['update'])){if($_POST['result']['genere'] == 'f'){echo 'selected';}} ?>>Donna</option>
                        </select>
                        <label for="esterno">esterno</label>
                        <input id="esterno" type="checkbox" name="esterno" value="<?php if(isset($_GET['update'])){echo $_POST['result']['esterno'];} ?>">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">

                </div>
                <div class="col-4" align="end">
                <input type="submit" class="btn btn-primary">
                </div>
                <div class="col-4">

                </div>

            </div>
        </form>

    </div>
</div>
