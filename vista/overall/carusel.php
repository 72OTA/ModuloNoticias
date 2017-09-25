<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
    </ol>
            <div class="carousel-inner" style="border-radius:15px;">

    <?php
                $link=conectar();
            $d1=mysqli_query($link,"Select * from tbl_noticias_blog where estatus='importante1' ORDER BY ID DESC limit 1 "); 
            $d2=mysqli_query($link,"Select * from tbl_noticias_blog where estatus='importante2' ORDER BY ID DESC limit 1 ");
            $d3=mysqli_query($link,"Select * from tbl_noticias_blog where estatus='importante3' ORDER BY ID DESC limit 1 ");
                            while($titulo=mysqli_fetch_array($d1)){   
            ?>
            <div class="carousel-item">
                <img class="first-slide" src="/modulonoticias/assets/img/formacion-1024x588.jpg" alt="First slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            <?php echo $titulo['titulo']; ?>
                        </h1>
                        <p>
                            <?php echo $titulo['dlarga'];?>
                        </p>
                        <button class="btn btn-secondary shadow_effect" onclick="irnoti(<?php echo $titulo['id'];?>);" role="button"><span>Ver detalles</span></button>
                    </div>
                </div>
            </div>

            <?php }while($titulo=mysqli_fetch_array($d2)){    ?>
            <div class="carousel-item">
                <img class="second-slide" src="/modulonoticias/assets/img/slide-1240x327.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            <?php echo $titulo['titulo']; ?>
                        </h1>
                        <p>
                            <?php echo $titulo['dlarga'];?>
                        </p>
                        <button class="btn btn-secondary shadow_effect" onclick="irnoti(<?php echo $titulo['id'];?>);" role="button"><span>Ver detalles</span></button>
                    </div>
                </div>
            </div>
            <?php }while($titulo=mysqli_fetch_array($d3)){    ?>
            <div class="carousel-item active">
                <img class="third-slide" src="/modulonoticias/assets/img/prevencion-riesgos-laborales.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>
                            <?php echo $titulo['titulo']; ?>
                        </h1>
                        <p>
                            <?php echo $titulo['dlarga'];?>
                        </p>
                        <button class="btn btn-secondary shadow_effect" onclick="irnoti(<?php echo $titulo['id'];?>);" role="button"><span>Ver detalles</span></button>
                    </div>
                </div>
            </div>
            
    </div>      
<?php } ?>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>
</div>