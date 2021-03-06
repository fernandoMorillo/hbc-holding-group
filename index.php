<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="icon.png">
    <link rel="stylesheet" href="CSS/owl.carousel.css">
    <link rel="stylesheet" href="CSS/owl.theme.default.min.css">
    <link rel="stylesheet" href="CSS/bulma.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <title>HBC - HOLDING</title>
</head>
<body>
<header>
    <div class="contenedor-logo">
        <img id="logoPrincipal" src="img/hbcnormal.png" alt="logo-hbc" width="105" height="80">
    </div>
</header>

<section class="principal pb-5 pt-5">
    <div class="columns">
        <div class="column uno">
            <div class="column pt-6 pt-4">
                <h1>ASESORÍA FINANCIERA Y RECUPERACIÓN DE TU VIDA
                    CREDITICIA AL INSTANTE</h1>
            </div>
            <div class="column">
                <div class="column ml-5 subtexto">
                    <h4 class="txt-titular2">TE BRINDAMOS UNA ASESORIA INTEGRAL :</h4>
                </div>
                <div class="container pt-3">
                    <ul class="container bulletpoint">
                        <li>Su caso financiero en manos expertas.</li>
                        <li class="pt-3">Rapidez para pronta solución de su caso.</li>
                        <li class="pt-2">Atención personalizada 24 horas vía celular
                            y Whatsapp.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="formulario" class="column">
            <div class="form_main">
                <form action="sendData.php" method="post" class="form_content">
                    <h3 class="txt-persuasivo">¡SOLICITE SU ASESORÍA AHORA!</h3>
                    <br>
                    <div class="field">
                        <label for="name" class="label">Nombres y apellidos</label>
                        <div class="control">
                            <input class="input" name="nombre" id="nombre" type="text" placeholder="">
                        </div>
                    </div>
                    <div class="field">
                        <label for="correo" class="label">Correo</label>
                        <div class="control">
                            <input class="input" name="correo" id="correo" type="email" required placeholder="">
                        </div>
                    </div>
                    <div class="field">
                        <label for="celular" class="label">Celular</label>
                        <div class="control">
                            <input class="input" name="celular" id="celular" type="number" required placeholder="">
                        </div>
                    </div>
                    <textarea class="textarea" name="interes" id="interes" required placeholder="Escriba aquí su interés"></textarea>
                    <div class="field">
                        <div class="control" style="display: block ruby;">
                            <label class="checkbox">
                                <input type="checkbox" id="check">
                            </label>
                            <a class=" is-link is-large" id="button">Acepto políticas de privacidad</a>
                        </div>
                    </div>
                    <div class="control">
                        <button type="submit" class="form_content__button" id="send">SOLICITAR UNA ASESORÍA</button>
                    </div>
                    <p style="color: red; display:none" id="error">error complete correctamente los campos</p>
                </form>
                <div class="modal">
                    <div class="modal-background">

                    </div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Política de tratamiento <br> de datos personales</p>
                            <button class="delete" id="cerrar"></button>
                        </header>
                        <section class="modal-card-body">
                            Dando cumplimiento a lo dispuesto en la Ley estatutaria 1581 de 2012 y a su Decreto
                            Reglamentario 1377 de 2013,
                            Funerales Los Olivos adopta la presente política para el tratamiento de datos personales, la
                            cual será informada
                            a todos los titulares de los datos recolectados o que en el futuro se obtengan en el
                            ejercicio de las actividades comerciales, culturales o laborales.
                        </section>
                        <footer class="modal-card-foot">

                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-6 quienes-somos">
    <div class="pos-textos">
        <h3 class="titulo">Quienes somos</h3>
    </div>
    <div class="columns pt-5">
        <div class="column is-half">
            <div class="column is-half">
                <div class="cont-imgSomos">
                    <img id="imgSomos" src="img/img-somos.png" alt="">
                </div>
            </div>
        </div>
        <div class="column is-half">
            <div class="column is-half">
                <p id="estiloParrafo">Somos una empresa encargada en diagnosticar y
                    analizar la vida financiera de nuestros clientes para
                    ayudarlos a alcanzar sus sueños.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="servicios pt-5 pb-6">
    <div class="pos-textos">
        <h3 class="titulo">¡Conoce nuestros servicios!</h3>
    </div>
    <div class="columns spt-5 pb-5">
        <div class="column container pt-6 secc">
            <div class="owl-carousel">
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="img/RECUPERACION.jpg"
                                     alt="imagen recuperación crediticia">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">RECUPERACIÓN DE VIDA
                                        CREDITICIA</p>

                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="img/CREACIÓN.jpg"
                                     alt="imagen creación de vida crediticia">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">CREACIÓN Y ADMINISTRACIÓN DE VIDA CREDITICIA
                                    </p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="img/INCLUSIÓN.jpg"
                                     alt="imagen inclusión de bancarización">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">INCLUSIÓN DE BANCARIZACIÓN
                                    </p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="img/RECUPERACIÓN%20ELBUENNOMBRE.jpg"
                                     alt="imagen recuperación del buen nombre">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">
                                        RECUPERACIÓN DEL BUEN NOMBRE COMERCIAL EN PERSONA NATURAL Y JURÍDICA
                                    </p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="img/DEPURACIÓN.jpg"
                                     alt="imagen depuración de deudas financieras">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">
                                        DEPURACIÓN DE DEUDAS FINANCIERAS PARA PAZ Y SALVO
                                    </p>

                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png"
                                     alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Servicio #6</p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card container">
                        <div class="card-image">
                            <figure class="image is-4by3">
                                <img src="https://bulma.io/images/placeholders/1280x960.png"
                                     alt="Placeholder image">
                            </figure>
                        </div>
                        <div class="card-content">
                            <div class="media">
                                <div class="media-content">
                                    <p class="title is-4">Servicio #7</p>
                                </div>
                            </div>

                            <div class="content">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
                                <a href="#">#css</a> <a href="#">#responsive</a>
                                <br>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</section>

<section class="pt-5 pb-6 contact">
    <div class="pos-cont pt-5 pb-5">
        <img id="imaCont" src="img/WHATSAPP.png" alt="logo de whatsApp">
    </div>
    <div style="color: white" class="pb-2">
        <p class="pos-cont">¿PROBLEMAS FINANCIEROS? ¡LO SOLUCIONAMOS!</p>
    </div>
    <div class="pos-cont is-half pb-5"><a href="https://wa.link/o8c42a" target="_blank">
            <button id="txtCon" class="button btncontac is-info is-inverted">CONTÁCTANOS</button>
        </a>
    </div>
</section>

<section class="pt-5 pb-6 quienes-somos">
    <div class="pos-textos">
        <h3 class="titulo">Nuestro equipo</h3>
    </div>
    <div class="columns pt-5">
        <div class="column is-half">
            <div class="column is-half">
                <div class="cont-imgSomos">
                    <img id="imgEquipo" src="img/nosotros.jpg" alt="">
                </div>
            </div>
        </div>
        <div class="column is-half">
            <div class="column is-half">
                <p id="estiloParra">"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                    doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="testimonios pt-5 pb-6">
    <div class="pos-textos pb-5">
        <h3 class="titulo">Testimonios</h3>
    </div>
    <div class="container column pt-5">

        <div class="columns">
            <div class="column is-half posiComen">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-96x96">
                            <img class="is-rounded" src="img/PERFIL2.jpg">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="column is-medium">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-96x96">
                            <img class="is-rounded" src="img/PERFIL.jpg">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
        <div class="columns pt-5">
            <div class="column is-three-fifths is-offset-one-fifth posiComen">
                <article class="media">
                    <figure class="media-left">
                        <p class="image is-96x96">
                            <img class="is-rounded" src="img/PERFIL3.jpg">
                        </p>
                    </figure>
                    <div class="media-content">
                        <div class="content">
                            <p>
                                <strong>John Smith</strong>
                                <br>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu
                                pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis
                                feugiat facilisis.
                            </p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

<section class="pt-5 pb-6 cotizar">
    <div class="column container is-medium">
        <p class="asesoramos">TE ASESORAMOS Y ACOMPAÑAMOS EN TODO TU PROCESO FINANCIERO
            DE MANERA INTEGRAL</p>
        <div style="text-align: center" class="container pt-3">
            <a href="#formulario">
                <button class="button btn-cotizar is-light is-large">SOLICITAR MI ASESORIA</button>
            </a>
        </div>
    </div>
</section>

<footer class="pt-6 pb-2">
    <div class="container">
        <div class="columns">
            <div class="column is-half">
                <div class="direccion">
                    <p>Dirección</p><br>
                    <p class="textoDir">
                        Barrio Biffi Diag. 31 <br> N°. 71-57 Oficina 203 </p>
                </div>
                <br>
            </div>
            <div class="column is-half">
                <div class="direccion">
                    <p>Siguenos</p><br>
                    <ul class="redes">
                        <li class="tam"><a href="https://www.facebook.com/HBC-holding-GROUP-SAS-644227945997225/"
                                           target="_blank"><img src="img/fb.png" alt=""></a></li>
                        <li class="tam"><a href="https://instagram.com/hbcholdinggroup?igshid=dn1r90d7145m"
                                           target="_blank"><img src="img/ig_logo.png" alt=""></a></li>
                        <li class="tam"><a href="https://wa.link/o8c42a" target="_blank"><img src="img/ws.png"
                                                                                              alt=""></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div style="text-align: center; color: white;">
            <p>©2020 Digital Alliance</p>
        </div>
    </div>
</footer>


<script src="Js/jquery.min.js"></script>
<script src="Js/owl.carousel.min.js"></script>
<script src="Js/carrusel.js"></script>
<script src="Js/validation.js"></script>
</body>
</html>