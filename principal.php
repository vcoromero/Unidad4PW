<?php include('auth.php'); ?>
<!DOCTYPE html>
<html lang="es">
<?php include('templates/head.php'); ?>

<body>
    <div class="container">
        <?php include('templates/nav.php'); ?>
        <div class="container" id="agrupar">
            <div style="margin-top:70px;" id="centrarContenido">
                <?php 
                    if(isset($_GET['sec']))
                    {
                        $view=$_GET['sec'];
                    }
                    else
                    {
                        $view='home';
                    }
                    include('views/'.$view.'.php');
                ?>   
            </div>
        </div> 
    </div>
<?php include('templates/footer.php'); ?>
</body>
</html>