<!DOCTYPE HTML>
<html>
    <head>
        <?php
        require 'html/head.html';
        ?>
        <style type="text/css">
            #gallery-link{
                background: rgba(249,114,35,1);
                box-shadow: inset 0 0 0.25em 0 rgba(0,0,0,0.125);
                color: #fff;
            }
        </style>
    </head>
    <body>

        <?php
        require 'html/cabecera.html';
        ?>

        <!-- Main -->
        <div id="main">
            <div id="cabecera" class="skel-panels-fixed">
                <img src="images/Logo-2048.png" class="titulo" alt="" />
            </div>
            <!-- Portfolio -->
            <section id="gallery" class="one">
                <div class="container primero">
                    <header>
                        <h2>Galería de trabajos</h2>
                    </header>

                    <div class="row">
                        <?php
                        //Cargar librerías
                        require 'libphp/funciones.php';
                        //Conectar servidor MySQL
                        conect_server();
                        $consulta = mysql_query("select * from obras;") or die("Fallo en consulta");
                        $nfilas = mysql_num_rows($consulta);
                        ?>
                        <div class="4u">
                            <?php
                            $i = 1;
                            $r = 0;
                            while ($i <= ($nfilas / 3)) {
                                $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                                $contenido = $filas['contenido'];
                                $idimg = $filas['idimg'];
                                ?>
                                <article class="item">
                                    <a class="image full imagen-zoom"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>">
                                        <span class="izq not-mobile"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>"/></span></a>
                                    <header class="textgallery">
                                        <h3><?php echo $contenido ?></h3>
                                    </header>
                                </article>
                                <?php
                                $i++;
                            }
                            if (($nfilas % 3) != 0) {
                                $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                                $contenido = $filas['contenido'];
                                $idimg = $filas['idimg'];
                                ?>
                                <article class="item">
                                    <a class="image full imagen-zoom"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>">
                                        <span class="izq not-mobile"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>"/></span>
                                    </a>
                                    <header class="textgallery">
                                        <h3><?php echo $contenido ?></h3>
                                    </header>
                                </article>
                                <?php
                                $i++;
                                $r++;
                            }
                            ?>
                        </div>
                        <div class="4u">
                            <?php
                            $j = $i - 1;
                            while ($i <= (($nfilas / 3) + $j)) {
                                $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                                $contenido = $filas['contenido'];
                                $idimg = $filas['idimg'];
                                ?>
                                <article class="item">
                                    <a class="image full imagen-zoom"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>">
                                        <span class="centro not-mobile"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>"/></span>
                                    </a>
                                    <header class="textgallery">
                                        <h3><?php echo $contenido ?></h3>
                                    </header>
                                </article>
                                <?php
                                $i++;
                            }
                            if ($r != 0 && (($nfilas % 3) - $r) != 0) {
                                $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                                $contenido = $filas['contenido'];
                                $idimg = $filas['idimg'];
                                ?>
                                <article class="item">
                                    <a class="image full imagen-zoom"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>">
                                        <span class="centro not-mobile"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>"/></span>
                                    </a>
                                    <header class="textgallery">
                                        <h3><?php echo $contenido ?></h3>
                                    </header>
                                </article>
                                <?php
                                $i++;
                                $r++;
                            }
                            ?>
                        </div>
                        <div class="4u">
                            <?php
                            $j = $i;
                            while ($i < (($nfilas / 3) + $j) && $i <= $nfilas) {
                                $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                                $contenido = $filas['contenido'];
                                $idimg = $filas['idimg'];
                                ?>
                                <article class="item">
                                    <a class="image full imagen-zoom"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>">
                                        <span class="der not-mobile"><img src="libphp/verimagen.php?idimg=<?php echo $idimg ?>"/></span>
                                    </a>
                                    <header class="textgallery">
                                        <h3><?php echo $contenido ?></h3>
                                    </header>
                                </article>
                                <?php
                                $i++;
                            }
                            ?>
                        </div>
                    </div>
                    <footer>
                        <a href="index.php#gallery" class="button scrolly">Volver</a>
                    </footer>
                </div>
            </section>
    </body>
</html>
