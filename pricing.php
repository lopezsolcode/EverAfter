<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>precios</title>
    <!-- font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>
    <section class="pricing">
    <h1 class="heading">nuestros precios</h1>
    <div class="box-container">
        <div class="box">
            <h3>plan básico</h3>
            <div class="price">$2.300.000/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> fotografía</p>
                <p> <i class="fas fa-check"></i> catering completo </p>
                <p> <i class="fas fa-check"></i> ceremonia de bodas</p>
                <p> <i class="fas fa-check"></i> ceremonia civil</p>
                <p> <i class="fas fa-check"></i> lista de invitados</p>
            </div>
            <a href="contact.php" class="btn">Elegir Plan</a>
        </div>

        <div class="box">
            <h3>plan premium</h3>
            <div class="price">$3.500.000/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> todo el plan base</p>
                <p> <i class="fas fa-check"></i> pastel de bodas</p>
                <p> <i class="fas fa-check"></i> vestido de novia</p>
                <p> <i class="fas fa-check"></i> peinado de novia</p>
                <p> <i class="fas fa-check"></i> maquillaje de novia</p>
            </div>
            <a href="contact.php" class="btn">Elegir Plan</a>
        </div>

        <div class="box">
            <h3>plan golden</h3>
            <div class="price">$6.000.000/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> todo el plan premium</p>
                <p> <i class="fas fa-check"></i> traje novio</p>
                <p> <i class="fas fa-check"></i> recepción decorada</p>
                <p> <i class="fas fa-check"></i> servicio de video</p>
                <p> <i class="fas fa-check"></i> música e iluminación</p>
            </div>
            <a href="contact.php" class="btn">Elegir Plan</a>
        </div>

    </div>
    </section>


    <section class="reviews">
        <h1 class="heading">Clientes Felices</h1>
        <div class="reviews-slider">
            <div class="w">

                <div class="slide">
                    <img src="Images/" alt="">

                
                </div>
            </div>


        </div>



    </section>



    <?php @include 'footer.php';?>
    
</div>
<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    
</body>
</html>