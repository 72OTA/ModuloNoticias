<?php
if (isset($_GET['datos'])){
    $datos = $_GET['datos'];
    $link=conectar();
            $dc=mysqli_query($link,"Select * from tblusuario where 
            nombre != 'administrador'
            &&
            (rut LIKE '$datos%' 
            || 
            nombre LIKE '%$datos%') ");      
        while($titulo=mysqli_fetch_array($dc)){                           
            ?>

    <center>
       
        <div class="jumbotron">
            <h1>
                <?php echo utf8_encode($titulo['nombre']); ?>
            </h1>
            <p>
                <?php echo $titulo['correo']; ?>
            </p>
            <h6>
                <?php echo $titulo['rut']; ?>
            </h6>
            <br>
            <button class="btn btn-secondary shadow_effect" onclick=""><span>Ver detalles</span></button>
        </div>
        <center>

            <?php }
} 
?>
            <br>
            <br>
            <button class="btn btn-secondary shadow_effect" onclick="pagina()"><span>Volver atras</span></button>
        </center>
        <br>
        <br>
