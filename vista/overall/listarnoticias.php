<div class="container">
    <div class="row">
        <?php
            if (isset($_GET['mes'])){
            $mes = $_GET['mes'];
            if (isset($_GET['ano'])){
            $ano=$_GET['ano'];
            $link=conectar();
            $dc=mysqli_query($link,"Select * from tbl_noticias_blog where mes='$mes' and ano='$ano'and estatus!='off'");
            while($titulo=mysqli_fetch_array($dc)){   
            ?>
            <div class="col-md-4">
                <h2>
                    <?php echo $titulo['titulo']; ?>
                    <input type="hidden" id="id" value="<?php echo $titulo['id'] ?>">
                </h2>
                <p>
                    <?php echo utf8_encode($titulo['dcorta']); ?>. </p>
                <button class="btn btn-secondary shadow_effect" onclick="irnoti(<?php echo $titulo['id'];?>);" role="button"><span>Ver Noticia</span></button>
            </div>
            <?php   
            }
          }
    }
            ?>
    </div>
    <hr>
    <center>
        <button class="btn btn-secondary shadow_effect" onclick="pagina()"><span>Volver Atras</span></button>
    </center>
</div>