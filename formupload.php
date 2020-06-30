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
                        <h2>Formulario para subida de fotos</h2>
                    </header>
                    <?php
                    //Conectar servidor MySQL
                    require 'libphp/funciones.php';
                    conect_server();
                    ?>
                    <script type="text/javascript">
<?php
if (autenticado()) {
    if ($_SERVER['HTTP_REFERER'] == 'http://' . $_SERVER['HTTP_HOST'] . '/login.php') {
        echo "alert(\"Bienvenido" . " " . $_SESSION['usuario_valido'] . "\")";
    }
} else {
    header("Location: login.php");
    exit;
}
?>
                    </script>
                    <h2>NUEVA FOTO DE OBRA</h2>
                    <form action="upload.php" method="post" ENCTYPE="multipart/form-data">
                        <p>Contenido de texto: 
                            <textarea type="text" name="contenido" cols="40" rows="5">
                                <?php
                                if (isset($_REQUEST['contenido']))
                                    echo $_REQUEST['contenido'];
                                ?>
                            </textarea>
                        </p>
                        <?php
                        if (isset($_REQUEST['contenido']) && $_REQUEST['contenido'] == '') {
                            echo '<p style="color:red">Falta contenido</p>';
                        }
                        ?>

                        <p>Foto de la obra: <input type="file" name="archivo"/></p>
                        <p style="color:red">
                            <?php
                            if (isset($_REQUEST['error_upload']))
                                echo $_REQUEST['error_upload']
                                ?>
                        </p>
                        <p style="color:red">
                            <?php
                            if (isset($_REQUEST['error_typeFile']))
                                echo $_REQUEST['error_typeFile']
                                ?>
                        </p>
                        <p style="color:red">
                            <?php
                            if (isset($_REQUEST['error_sizeFile']))
                                echo $_REQUEST['error_sizeFile']
                                ?>
                        </p>

                        <input type="submit" value="Enviar" class="button scrolly"/>
                    </form>
                </div>
                <?php
                require 'html/botones.html';
                ?>
                <br>
                <a href="libphp/logout.php" class="button scrolly">LogOut</a>
            </section>
        </div>
        <?php
        require 'html/footer.html';
        ?>
    </body>
</html>

