<?php include __DIR__ . '/home.php' ?>
<div class="container">
    <?php
    if (strlen($msg_result) > 0) {
        ?>
        <div class="row text-center">
            <div class="display-5">
            <?=$msg_result ?>
            </div>
        </div>
        <?php
    } else {
    ?>
        <div class="row justify-content-center">
            <table>
                <thead>
                    <th> cod_card </th>
                    <th> nome </th>
                    <th> cognome </th>
                    <th> genere </th>
                    <th> data_N </th>
                    <th> lugo_N </th>
                    <th> esterno </th>
                    <th> action </th>
                </thead>
                <tbody>
                    <?php foreach ($result as $item) { ?>
                        <tr>
                            <td><?= $item['cod_card'] ?>
                            </td>
                            <td><?= $item['nome'] ?>
                            </td>
                            <td><?= $item['cognome'] ?>
                            </td>
                            <td><?= $item['genere'] ?>
                            </td>
                            <td><?= $item['data_N'] ?>
                            </td>
                            <td><?= $item['lugo_N'] ?>
                            </td>
                            <td><?= $item['esterno'] ?>
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col-2">
                                    <form action="/public/index.php" method="POST">
                                    <button type="submit" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Cancella questo elemento" name="delete" value="<?=$item['cod_card'] ?>"><i class="bi bi-trash3"></i></button>
                                </form>

                                    </div>
                                    <div class="col-2">
                                    <form action="/public/index.php?='<?=$item['cod_card']?>" method="GET">
                                    <button type="submit" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Aggiorna questo eleemnto"  name="update" value="<?=$item['cod_card'] ?>"><i class="bi bi-pencil"></i></button><? ?>
                                </form>

                                    </div>
                                </div>


                            </td>

                        </tr>
                    <?php } ?>
                </tbody>

            </table>
        </div>
    <?php
    }
    ?>
</div>
