<?php
if (isset($_GET['id'])){
    $id = $_GET['id'];
            $link=conectar();
            $dc=mysqli_query($link,"Select * from tbl_noticias_blog where id='$id'");         while($titulo=mysqli_fetch_array($dc)){                           
            ?>


    <div class="jumbotron">
        <h1>
            <?php echo $titulo['titulo']; ?>
        </h1>
        <p>
            <?php echo $titulo['dlarga']; ?>
        </p>
        <h6>
            <?php echo $titulo['Fecha']; ?>
        </h6>
    </div>
    <center>
        <button class="btn btn-secondary shadow_effect" onclick="pagina()"><span>Volver atras</span></button>
        <?php }
    
}
?>
    </center>
    <br>
    <br>
 
