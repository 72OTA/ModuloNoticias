<div class="container">
    <div class="row">
        <?php
                $link=conectar();
                            $dc=mysqli_query($link,"Select * from tbl_noticias_blog Order By id DESC");         
                            while($titulo=mysqli_fetch_array($dc)){   
            ?>

            <div class="col-md-4">
                <h2>
                    <?php echo $titulo['titulo']; ?>
                    <input type="hidden" id="id" value="<?php echo $titulo['id'] ?>">
                </h2>
                <p>
                    <?php echo utf8_encode($titulo['dcorta']); ?>. </p>
                <button class="btn btn-secondary shadow_effect" onclick="modificarNoticia(<?php echo $titulo['id'];?>);" role="button"><span>Modificar</span></button>
            </div>
            <?php   
                            }
            ?>

    </div>

    <hr>
    <center>
        <button class="btn btn-secondary shadow_effect" onclick="pagina()"><span>Volver atras</span></button>
    </center>
</div>
