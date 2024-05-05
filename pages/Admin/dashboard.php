<?php 
session_start();
$page_title = 'Dashboard'; 
?>
<?php include('../../utils/db_instance.php'); ?>
<?php include('../../includes/header.php') ?>
<?php include('../../includes/navbar.php') ?>

<div class="container mt-5">
    <div class="row justify-content-center">

        <div class="col-md-16 ">
            <div class="card shadow">
                <div class="card-header ">

                    <form action="users.php" method="post"
                        style="display:flex;justify-content:space-between;width:100%">
                        <h2>Admin</h2>
                        <button type="submit" class="btn btn-primary col-md-1" name="list">
                            Lister
                        </button>
                    </form>

                </div>

            </div>
            </form>
        </div>
    </div>
</div>

</div>












<?php include('../../includes/footer.php') ?>