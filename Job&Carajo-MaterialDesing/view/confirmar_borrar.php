<!DOCTYPE html>
<html>
<head>
    <?php include(TEMPLATE_PATH.'head.php'); ?> 
</head>
<body>
    <div class="mx-auto col-6 card shadow-lg">
        <div class="card-header">
            <h2>¿Estas seguro que quieres eliminar el registro?</h2>
            <p>Si borras el registro no habrá posibilidad de recuperarlo, piensalo bien.</p>
        </div>
        <div class="card-body">
            <form action="" method="POST" class="form-inline">
                <button class="btn btn-custom mb-2 mr-sm-2" name="confirmar" type="submit" value="1">Si</button>
                <button class="btn btn-custom mb-2 mr-sm-2" name="confirmar" type="submit" value="0">No</button>
            </form>
        </div>
    </div>

<?php include(TEMPLATE_PATH.'javascript.php'); ?>
</body>
</html>