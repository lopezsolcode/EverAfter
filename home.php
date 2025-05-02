<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>incio</title>
    <!-- font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    
    <!-- swiper css link-->

    <!-- css file connection-->
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>

    <section class="home">

        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(Images/home-slide-5.jpg) no-repeat">
                    <div class="content">
                        <h3>Planeá tu boda</h3>
                        <p> Se acerca el gran día y queremos ayudarlos a preparar cada detalle. ¿Están listos para comenzar a diseñar la boda de tus sueños? Con EverAfter pueden hacer que el sueño de su boda perfecta se vuelva realidad.</p>
                        <a href="about.php" class="btn">Descubre Más</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <h3>Estamos en cada detalle</h3>
                        <p>Contamos con todo lo necesario para que su boda salga perfecta. Desde el maquillaje y el vestido, hasta la torta y la música, les presentamos opciones para que ustedes sólo tengan que elegir la que más se adapte a ustedes.</p>
                        <a href="about.php" class="btn">Descubre Más</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Images/home-slide-4.jpg) no-repeat">
                    <div class="content">
                        <h3>Planea tu boda.</h3>
                        <p>Se acerca el gran día y queremos ayudarlos a preparar cada detalle. ¿Están listos para comenzar a diseñar la boda de tus sueños? Con EverAfter pueden hacer que el sueño de su boda perfecta se vuelva realidad.</p>
                        <a href="about.php" class="btn">Descubre Más</a>

                    </div>
                </div>

                <div class="swiper-slide slide " style="background:url(Images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <h3>Estamos en cada detalle.</h3>
                        <p>Contamos con todo lo necesario para que su boda salga perfecta. Desde el maquillaje y el vestido, hasta la torta y la música, les presentamos opciones para que ustedes sólo tengan que elegir la que más se adapte a ustedes.</p>
                        <a href="about.php" class="btn">Descubre Más</a>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        
    </section>
    <section class="services">
        <h1 class="heading">nuestros servicios</h1>

    <div class="swiper service-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="Images/photography.jpg" alt="">
                <div class="content">
                    <h3>fotografía</h3>
                    <p>Contamos con servicio de fotografía e iluminación profesional. El servicio incluye una sesión de fotos previa y la fotografía su día especial.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/registory.jpg" alt="">
                <div class="content">
                    <h3>Ceremonia Civil</h3>
                    <p>Les ofrecemos celebrar la ceremonia de unión civil en el lugar de su boda.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>



            <div class="swiper-slide slide">
                <img src="Images/guests.jpg" alt="">
                <div class="content">
                    <h3>lista de invitados</h3>
                    <p>Ofrecemos invitaciones físicas y virtuales. Nos encargamos del diseño, la entrega, y el proceso de confirmación de los invitados.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/cake.jpg" alt="">
                <div class="content">
                    <h3>pastel de bodas</h3>
                    <p>Nuestros reposteros pueden hacer que cualquier torta que se imaginen se vuelva realidad, y además con el mejor sabor.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/ceremony.jpg" alt="">
                <div class="content">
                    <h3>ceremonia de bodas</h3>
                    <p>Organizamos el momento de su unión de acuerdo con su preferencia. Nosotros contactamos a quién oficie la boda y diseñamos el altar.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/dinning.jpg" alt="">
                <div class="content">
                    <h3>Cena y aperitivos</h3>
                    <p>Ofrecemos menú general y opciones para quienes lo necesiten. Además, contamos con la vajilla y mantelería completa de primera calidad.</p>
                    <a href="about.php" class="btn">Saber Más</a>
                </div>

            </div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    </section>

    <?php @include 'footer.php';?>
</div>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>
<!-- swiper js link-->


    
</body>
</html>