<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Clase de laboratorio</title>       
        <link href="css/site.css" type="text/css" rel="stylesheet">      
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>

        <script type="text/javascript">//<![CDATA[
            $(function () {
                $('#slideshow div:gt(0)').hide();
                setInterval(function () {
                    $('#slideshow div:first-child').fadeOut(0)
                            .next('div').fadeIn(1000)
                            .end().appendTo('#slideshow');
                }, 4000);
            });
//]]></script>
    </head>
    <body>        
        <header>
            <div id="centrarHeader">
                <div id="logo">
                    <a href="index.php">
                        <!--<img src="images/demo6.png"/>-->
                        <img src="images/logo.png"/>
                    </a>                    
                </div>
                <div id="busqueda">
                    <form id="searchbox" action="">                
                        <input id="search" type="text" placeholder="Buscar...">                        
                        <input id="submit" type="submit" value="">
                    </form>
                </div>
            </div>
        </header>
        <nav>
            <div id="centrarNav">
                <ul id="alinearNav">
                    <li><a href="#">Instituto</a></li>
                    <li><a href="#">Cursos</a></li>
                    <li><a href="#">Carreras</a></li>
                    <li><a href="#">Calendario</a></li>
                    <li><a href="#">Promociones</a>
                        <ul>
                            <li><a href="#">Abogacia</a></li>
                            <li><a href="#">Medicina</a></li>
                            <li><a href="#">Informatica</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Alumnos</a></li>
                    <li><a href="#">Empleos</a></li>
                </ul>
                <div id="info">
                    <a href="#"> (0341) 527-1200</a>                    
                </div>
            </div>
        </nav>
        <div id="slideshow" style="text-align: center;">
            <div><img src="images/demo10.jpg" height="400px" width="70%"></div>
            <div><img src="images/slide-carrera-net-1.0.jpg" height="400px" width="70%"/></div>  
            <div><img src="images/slide-windows-server-2012-1.0.jpg" height="400px" width="70%" /></div>  
            <div><img src="images/slider-java-experto.jpg" height="400px" width="70%" /></div>   
        </div>
        <div id="contenido">
            <div>
                <h1 id="title">Catalogos de Cursos</h1>
                <p style="text-align: justify;">Miríada X te ofrece los mejores cursos MOOC de universidades e instituciones iberoamericanas.
                    Nuestros cursos promueven el aprendizaje social y colaborativo, porque creemos en  la formación gratuita y de calidad.
                    ¡Aprende, crea y comparte!</p>
            </div>
            <section>
                <article>     
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_aprendizaje.jpg"/>   
                        <h1>Aprendizaje Personalizado</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>             
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article>    
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_divulgacioncientifica.jpg"/>   
                        <h1>Principios de la divulgacion cientifica</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>   
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article>   
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_inteligencianegocios.jpg"/>   
                        <h1>Inteligencia de Negocios</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>   
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article> 
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_materiales.jpg"/>   
                        <h1>Materiales de Construccion</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>  
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
            </section>       
            <section>
                <article>   
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_microeconomia.jpg"/>   
                        <h1>Microeconomia</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>    
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article>
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_subtitulaciononline.jpg"/>   
                        <h1>Subtitulacion Institucional</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>   
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article>  
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_IniciacionDibujoCreativo.jpg"/>   
                        <h1>Dibujo Creativo</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>  
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
                <article>     
                    <div class="articleCabecera">
                        <img class="articleImg" src="images/art_IntroduccionBiomateriales.jpg"/>   
                        <h1>Introduccion a los Biomateriales</h1>
                        <div class="divBorder">
                            <br/>
                            <span>Universidad Tecnica Particular de Loja</span>
                            <span>Octubre / Febrero</span>
                        </div>  
                    </div>
                    <a class="curso" href="/web/impresion-3d-de-drones/inicio">
                        <div>Ir al curso</div>
                    </a>
                </article>
            </section>    
        </div>
        <footer>
            <div id="centrarFooter">
                <ul>
                    <li><span>Conócenos</span></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Normas de trabajo en MiríadaX</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                </ul>
                <ul>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                </ul>
                <ul>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                </ul>
                <ul>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                    <li><a href="#">Nuestra filosofía</a></li>
                </ul>
            </div>            
        </footer>
    </body>
</html>
