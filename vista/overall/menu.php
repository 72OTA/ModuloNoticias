<nav class="navbar-expand navbar-light  fixed-top bg-light" style="height:50px;">
    <ul class="navbar-nav mr-auto fixed-top ">
        <a href="http://www.cablenielsen.cl/">
            <img class="navbar-brand" src="/modulonoticias/assets/img/n1.png" style="width: 150px;height: 50px;">
        </a>
        <?php
                    $obtenermenu=mysqli_query($link,"Select * from tblnoticias_menu where idopcion!='2' order By PosI");
                    while($menu=mysqli_fetch_array($obtenermenu))
                    {
                        $submenu=mysqli_query($link,"Select * from tblnoticias_submenu where idopcion='$menu[idopcion]' and estado=1 Order By PosS");
                        if(mysqli_num_rows($submenu)>0) 
                        {
                            ?>
            <li class="nav-item dropdown mr-auto">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="margin-left:200px;">
                    <span><?php echo utf8_encode($menu['descripcion']); ?></span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="dropdown-menu ">
                    <?php
                            while($row1=mysqli_fetch_array($submenu))
                            {
                                ?>
                        <li>
                            <a style="text-decoration: none;color:black" href="<?php echo " /../../".$row1['url'];?>">
                                <?php echo utf8_encode($row1['descripcion']); ?>
                            </a>
                        </li>

                        <?php
                            }
                            ?>
                </ul>
            </li>
            <?php
                        }
                            ?>
           
                <?php
                        
                    }
                
            ?>
                    <?php
    mysqli_close($link);

?>
    </ul>
</nav>