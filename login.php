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
                        <h2>Login Para subida de fotos</h2>
                    </header>
                    <form action="libphp/checklogin.php" method="POST" style="height: 100%; vertical-align: central">
                        <p>Nombre <input type="text" name="user" placeholder="Introduzca su nombre"></p>
                        <p>Contraseña:<input type="password" name="password" placeholder="Introduzca su password"></p>
                        <input type="submit" value="Login" class="button scrolly">
                    </form>
                    <script type="text/javascript">
<?php
if (isset($_REQUEST['error_login'])) {
    echo "window.alert('" . $_REQUEST['error_login'] . "');";
}
?>
                    </script>
                </div>
            </section>
        </div>
        <?php
        require 'html/footer.html';
        ?>
    </body>
</html>

