<?php include('auth.php'); ?>
<?php include('templates/head.php'); ?>

<body>
    <div class="container">
    <?php include('templates/nav.php'); ?>

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
    
</body>

<?php include('templates/footer.php'); ?>