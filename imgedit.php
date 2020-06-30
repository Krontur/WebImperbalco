<!DOCTYPE HTML>
<html>
    <head>
        <?php
        require 'html/head.html';
        ?>
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
            <section id="portfolio" class="one">
                <div class="container primero">
                    <header>
                        <h2>Eliminar fotos</h2>
                    </header>
                    <?php
                    require 'libphp/funciones.php';
                    //Conectar servidor MySQL
                    conect_server();
                    //Consulta de idcategoria
                    $consulta = mysql_query("select * from obras;") or die("Fallo en consulta");
                    $nfilas = mysql_num_rows($consulta);
                    ?>
                    <table>
                        <?php
                        for ($i = 1; $i <= $nfilas; $i++) {
                            echo "<tr>\n";
                            $filas = mysql_fetch_array($consulta) or die("Error de datos.");
                            echo "<td>" . $filas['id'] . "</td>\n";
                            echo "<td>" . $filas['contenido'] . "</td>\n";
                            echo "<td>" .
                            '<form action = "libphp/borrar.php" method = "post">
                        <input type = "hidden" name = "id" value = "' . $filas['id'] . '">
                        <input type = "hidden" name = "idimg" value = "' . $filas['idimg'] . '">
                        <input type = "submit" value = "borrar">
                        </form>'
                            . '</td>';
                        }
                        echo "</tr>\n";
                        ?>
                    </table>
                </div>
                <?php
                require 'html/botones.html';
                ?>
            </section>
        </div>
        <?php
        require 'html/footer.html';
        ?>
    </body>
</html>

