<!DOCTYPE html>
<html lang="es">
   <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/assets/img/favicon.png">
    <title>Noticias</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/jumbotron.css" rel="stylesheet">
</head>

<?php
include ('vista/overall/botones.html');
    ?>
    <body class="pb-0">
    <?php
include('model/conectar.php');
$link=conectar();

if (isset($_GET['view'])) 
    $view=strtoupper($_GET['view']); 
else 
    $view='INDEX';
if ($view == 'INDEX'){ include ('vista/home/index.php'); }
if ($view == 'NOTICIAS'){ include ('vista/home/mostrarNoticia.php'); }
if ($view == 'LISTARNOTICIAS'){ include ('vista/home/listarNoticias.php'); }
if ($view == 'BUSQUEDA'){ include ('vista/home/busqueda.php'); }
if ($view == 'DESCARGAS'){ include ('vista/home/descargas.php'); }
if ($view == 'LISTARPORFECHA'){ include ('vista/home/listarnoticiasporfecha.php');}

include('vista/overall/footer.html');
include('vista/overall/reloj.php');
?>
        <div class="wrapper">
        <?php include ('vista/overall/menu.php');?>
    </div>

   <script src="assets/js/jquery-3.2.1.min.js"></script>
     <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="model/ajax.js"></script>
    </body>
    </html>