<nav class="navbar-light bg-transparent" style="position: fixed;">
    <ul class="navbar-nav ">
        <br>
        <?php
                    $obtenermenu=mysqli_query($link,"Select * from tblnoticias_menu where descripcion='EVALUACIONES' ");
                    while($menu=mysqli_fetch_array($obtenermenu))
                    {
                        ?>
            <div id="busqueda">
                <div class="input-group-btn">
                    <input class="form-control" placeholder="<?php echo utf8_encode($menu['descripcion']); ?>" name="view" id="buscar" type="text">
                    <button class="btn btn-default" onclick="return cargarbusqueda();" id="opener"></button>
                </div>
            </div>
            <br>
            <br>
            <div id="datos" class="navbar-expand">

                <?php
                                                $resyear=mysqli_query($link,"select distinct ano from tbl_noticias_blog where estatus!='off' order by ano desc");
                                                while($menu=mysqli_fetch_array($resyear))
                                                {
                                                    $resmonth=mysqli_query($link,"Select distinct mes from tbl_noticias_blog where ano='$menu[ano]' && estatus!='off'");
                                                    if(mysqli_num_rows($resmonth)>=0) 
                                                    {
                                                        ?>
                    <li class="nav-item dropdown mr-auto">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span><?php echo utf8_encode($menu['ano']); ?></span> <i class="fa fa-angle-left pull-right"></i>
                        </a>
                        <ul class="dropdown-menu ">
                            <?php
                                            while($row1=mysqli_fetch_array($resmonth))
                                                        {
                                                    $mes=$row1['mes'];
                                                    switch($mes)
                                                    {
                                                        case '01':
                                                            $mes='Enero';
                                                            break;
                                                        case '02':
                                                            $mes='Febrero';
                                                            break;
                                                        case '03':
                                                            $mes='Marzo';
                                                            break;
                                                        case '04':
                                                            $mes='Abril';
                                                            break;
                                                        case '05':
                                                            $mes='Mayo';
                                                            break;
                                                        case '06':
                                                            $mes='Junio';
                                                            break;
                                                        case '07':
                                                            $mes='Julio';
                                                            break;
                                                        case '08':
                                                            $mes='Agosto';
                                                            break;
                                                        case '09':
                                                            $mes='Septiembre';
                                                            break;
                                                        case '10':
                                                            $mes='Octubre';
                                                            break;
                                                        case '11':
                                                            $mes='Noviembre';
                                                            break;
                                                        case '12':
                                                            $mes='Diciembre';
                                                            break;
                                                    }
                                                            ?>
                                <a style="text-decoration: none;color:black" onclick="vernoticia('<?php echo $row1['mes']."','".$menu['ano'];?>')">
                                    <?php echo $mes;?>
                                </a>
                                <br>
                                <?php
                                                        }
                                                        ?>
                        </ul>
                    </li>
                    <?php
                                                    }
                                                }
                    }
    mysqli_close($link);
?>
            </div>
    </ul>
</nav>