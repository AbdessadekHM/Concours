<?php 
session_start();
$page_title = 'Users'; 
?>
<?php include('../../utils/db_instance.php'); ?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-16 ">
            <div class="card shadow">
                <div class="card-header ">

                    <form action="dashboard.php" method="post"
                        style="display:flex;justify-content:space-between;width:100%">
                        <h2>Admin</h2>
                        <button type="submit" class="btn btn-danger col-md-1" name="list">
                            Back
                        </button>
                    </form>

                </div>
                <div class="card-body">
                    <table class="table table-sm table-striped">
                        <?php
                    $result = $db->Read('etud3a');
                    ?>
                        <thead>
                            <th> Image </th>
                            <th> Nom </th>
                            <th> prenom </th>
                            <th> Email </th>
                            <th> Date de naissance </th>
                            <th> Diplome </th>
                            <th> Niveau </th>
                            <th> Etablissement </th>
                            <th> Username </th>
                            <th> CV </th>
                        </thead>
                        <?php
                    foreach ($result as $row) {
                    ?>
                        <tr>
                            <td> <img style="width:50px"
                                    src="../../<?=str_replace("C:\\xampp\htdocs\Concours\\","",$row->photo) ?>" alt="">
                            </td>
                            <td> <?= $row->nom ?> </td>
                            <td> <?= $row->prenom ?> </td>
                            <td> <?= $row->email ?> </td>
                            <td> <?= $row->naissance ?> </td>
                            <td> Bac+<?= $row->diplome ?> </td>
                            <td> Annee <?= $row->niveau ?> </td>
                            <td> <?= $row->etablissement ?> </td>
                            <td> <?= $row->log ?> </td>
                            <td>
                                <a href="../../<?=str_replace("C:\\xampp\htdocs\Concours\\","",$row->cv) ?>" download>
                                    <button class='btn btn-primary'>Download</button>
                                </a>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </table>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>

</div>












<?php include('../../includes/footer.php') ?>