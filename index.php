<!DOCTYPE HTML>
<html>
    <head>
        <?php
        require 'html/head.html';
        ?>
    </head>
    <body>

        <!-- Header -->
        <div id="header" class="skel-panels-fixed">

            <div class="top">
                <!-- Logo -->
                <div id="logo">
                    <span class="byline" style="line-height: 3em;"></span>
                </div>

                <!-- Nav -->
                <nav id="nav">
                    <ul>
                        <li><a href="#inicio" id="inicio-link" class="skel-panels-ignoreHref"><span class="fa icon-iconregistered">Inicio</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link" class="skel-panels-ignoreHref"><span class="fa icon-iconworks">Obras</span></a></li>
                        <li><a href="#gallery" id="gallery-link" class="skel-panels-ignoreHref"><span class="fa icon-icongallery">Galería</span></a></li>
                        <li><a href="#about" id="about-link" class="skel-panels-ignoreHref"><span class="fa fa-cog">Servicios</span></a></li>
                        <li><a href="#ite" id="ite-link" class="skel-panels-ignoreHref"><span class="fa icon-iconite">ITE's</span></a></li>
                        <li><a href="#contact" id="contact-link" class="skel-panels-ignoreHref"><span class="fa icon-iconsocial">Contacto</span></a></li>
                    </ul>
                </nav>

            </div>

        </div>

        <!-- Main -->
        <div id="main">
            <div id="cabecera" class="skel-panels-fixed wide widest normal narrow">
                <!-- class="image featured" -->
                <img src="images/Logo-2048.png" class="titulo" alt="" />
            </div>

            <section id="topimagenes" class="one">
                <div class="row primero">
                    <div class="12u image">
                        <img src="images/cabecera.png" style="padding:1em 1.5em;"/>
                    </div>
                </div>
            </section>

            <!-- Intro -->
            <section id="inicio" class="one">
                <div class="container primero">							
                    <div class="etiq_section"></div>
                    <header>
                        <h2 class="alt">Imperbalco S.A. 30 años de experiencia a su servicio</h2>
                    </header>
                    <div class="row">
                        <div class="2u">
                            <div class="etiqueta anchomax only-mobile"><br><span class="fa icon-iconregistered" style="font-size:3em"></span><br>INICIO</div>
                            <div class="etiqueta anchomax not-mobile"><br><span class="fa icon-iconregistered" style="font-size:3em"></span><br>I<br>N<br>I<br>C<br>I<br>O<br><br></div>
                        </div>
                        <div class="10u">
                            <?php
                            require 'html/inicio.html';
                            ?>

                            <div class="row flush">
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA1.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA2.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA3.jpg"/></div>
                            </div>
                        </div>
                        <footer>
                        </footer>

                    </div>
                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header class="not-mobile">
                        <h2>Trabajos Realizados</h2>
                    </header>
                    <div class="row">
                        <div class="2u">
                            <div class="etiqueta only-mobile" style="width:100%; height:100%;margin:10px 10px 10px 0px;"><br>
                                <span class="fa icon-iconworks" style="font-size:3em"></span><br>OBRAS</div>
                            <div class="etiqueta not-mobile" style="width:100%; height:100%;margin:10px 10px 10px 0px;"><br>
                                <span class="fa icon-iconworks" style="font-size:3em"></span><br>O<br>B<br>R<br>A<br>S<br><br></div>
                        </div>
                        <div class="10u">
                            <?php
                            require 'html/obras.html';
                            ?>
                            <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps/ms?msid=214600374345159061934.0004c8b4a41430868a226&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=39.563618,2.667961&amp;spn=0.096341,0.154324&amp;output=embed"></iframe>
                            <br/><small>Ver ubicación de trabajos de <a href="https://maps.google.es/maps/ms?msid=214600374345159061934.0004c8b4a41430868a226&amp;msa=0&amp;ie=UTF8&amp;t=m&amp;ll=39.563618,2.667961&amp;spn=0.096341,0.154324&amp;source=embed" style="color:#0000FF;text-align:left"><strong>IMPERBALCO</strong></a> en un mapa más grande</small><br><br>

                            <div class="row flush">
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA1.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA2.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA3.jpg"/></div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- Galería -->
            <section id='gallery' class="two">
                <div class="container">
                    <header class="not-mobile">
                        <h2>Galería</h2>                    
                    </header>                   

                    <div class="row">
                        <div class="3u">
                            <article class="item image anchomax">
                                <a href="gallery.php" class="etiqueta anchomax only-mobile"><div>
                                        <br><span class="fa icon-icongallery" style="font-size:3em;line-height:1em"></span><br>GALERÍA</div></a>
                                <a href="gallery.php" class="etiqueta not-mobile" style="width:60%; height:auto;margin:10px 10px 10px 0px;"><div>
                                        <br><span class="fa icon-icongallery" style="font-size:3em"></span><br>G<br>A<br>L<br>E<br>R<br>Í<br>A<br><br></div></a>
                            </article>
                        </div>
                        <?php
                        require 'html/gallery.html';
                        ?>
                    </div>
                    <footer>
                        <a href="gallery.php" class="button scrolly">Mostrar más trabajos</a>
                    </footer>
                </div>
            </section>

            <!-- About Me -->
            <section id="about" class="three">
                <div class="container">

                    <header class="not-mobile">
                        <h2>Servicios</h2>
                    </header>
                    <div class="row">
                        <div class="2u">
                            <div class="etiqueta only-mobile" style="width:100%; height:100%;margin:10px 10px 10px 0px;"><br><span class="fa fa-cog" style="font-size:3em"></span><br>SERVICIOS</div>
                            <div class="etiqueta not-mobile" style="width:100%; height:100%;margin:10px 10px 10px 0px;"><br><span class="fa fa-cog" style="font-size:3em"></span><br>S<br>E<br>R<br>V<br>I<br>C<br>I<br>O<br>S<br><br></div>
                        </div>
                        <div class="10u">
                            <?php
                            require 'html/servicios.html';
                            ?>
                            <div class="row flush">
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA1.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA2.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA3.jpg"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- ITE's -->
            <section id="ite" class="four">
                <div class="container">
                    <header class="not-mobile">
                        <h2>Inspección Técnica de Edificios</h2>
                    </header>
                    <div class="row">
                        <div class="2u">
                            <div class="etiqueta anchomax only-mobile" style="height:100%;margin:10px 10px 10px 0px;"><br><span class="fa icon-iconite" style="font-size:3em"></span><br>ITE'S</div>
                            <div class="etiqueta anchomax not-mobile" style="height:100%;margin:10px 10px 10px 0px;"><br><span class="fa icon-iconite" style="font-size:3em"></span><br>I<br>T<br>E<br>'<br>S<br><br></div>
                        </div>
                        <div class="10u">
                            <?php
                            require 'html/ite.html';
                            ?>
                            <div class="row flush">
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA1.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA2.jpg"/></div>
                                <div class="4u image not-mobile" style="padding-right:10px !important;"><img src="images/PA3.jpg"/></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="four">
                <div class="container">

                    <header class="not-mobile">
                        <h2>Contacto</h2>
                    </header>
                    <div class="etiqueta only-mobile" style="width:100%; height:100%;margin:10px 10px 10px 0px;"><br>
                        <span class="fa icon-iconsocial" style="font-size:3em"></span><br>CONTACTO</div>
                    <?php
                    require 'html/contacto.html';
                    ?>
                    <br><br>
                    <div class="row">
                        <div class="6u">
                            <form method="post" action="libphp/email.php">
                                <div class="row item">
                                    <div class="6u"><input type="text" class="text" name="name" placeholder="Nombre" /></div>
                                    <div class="6u"><input type="text" class="text" name="email" placeholder="Email" /></div>
                                </div>
                                <div class="item">
                                    <div class="12u">
                                        <textarea name="message" placeholder="Mensaje"></textarea>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="12u">
                                        <a href="#" class="button submit">Enviar Mensaje</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <script>
                        <?php
                        if (isset($_REQUEST['resultemail']) && !$_REQUEST['resultemail'] == '') {
                            echo 'alert("' . $_REQUEST['resultemail'] . '")';
                        }
                        ?>
                        </script>
                        <div class="6u">
                            <div class="12u maps">
                                <iframe  class="item heightmax" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.es/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=imperbalco&amp;aq=&amp;sll=39.367481,2.742513&amp;sspn=2.964076,2.460938&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=39.587864,2.653247&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe>
                            </div>
                            <div class="12u">
                                <a  class="item button submit" href="https://maps.google.es/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=imperbalco&amp;aq=&amp;sll=39.367481,2.742513&amp;sspn=2.964076,2.460938&amp;ie=UTF8&amp;hq=&amp;hnear=&amp;ll=39.587864,2.653247&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A" style="color:#0000FF;text-align:left">Ver mapa más grande</a>
                            </div>
                        </div>
                    </div>

                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <div class="copyright">
                <ul class="menu">
                    <li><a href="http://www.imperbalco.es">www.imperbalco.es</a></li>
                </ul>
            </div>

        </div>

    </body>
</html>