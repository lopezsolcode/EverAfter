<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <!-- font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>

    <section class="about">
    <img src="Images/about.png" alt="">
    <h3>sobre nosotros</h3>
    <p>Somos una empresa con años de experiencia y muchos clientes felices que nos avalan. Organizamos cada detalle de su boda para que sólo puedan enfocarse en disfrutar de su gran día. Contamos con servicios propios, y nos encargamos de presentarles presupuestos de servicios extra.</p>
    <a href="contact.php" class="btn">contactános</a>
    </section>

    <section class="team">
        <h1 class="heading">our team</h1>
            <div class="box-container">

                <div class="box">
                    <img src="Images\team1.jpg" alt="not found">
                    <h3>María Saez</h3>
                    <p>organizadora de bodas</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Images\team2.jpg" alt="not found">
                    <h3>Juan Pérez</h3>
                    <p>fotógrado</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Images\team3.jpg" alt="not found">
                    <h3>Agnes Real</h3>
                    <p>decoradora</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Images\team4.jpg" alt="not found">
                    <h3>Juana Álvarez</h3>
                    <p>diseñadora de modas</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
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