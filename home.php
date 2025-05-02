<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>
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
                <div class="swiper-slide slide" style="background:url(Images/home-slide-2.jpg) no-repeat">
                    <div class="content">
                        <h3>plan your wedding.</h3>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eaque, distinctio, a ex fugiat alias praesentium quidem eum sunt, tempore necessitatibus nisi blanditiis? Quia autem accusantium iure aliquam in magni?</p>
                        <a href="about.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Images/home-slide-3.jpg) no-repeat">
                    <div class="content">
                        <h3>plan your wedding.</h3>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eaque, distinctio, a ex fugiat alias praesentium quidem eum sunt, tempore necessitatibus nisi blanditiis? Quia autem accusantium iure aliquam in magni?</p>
                        <a href="about.php" class="btn">discover more</a>
                    </div>
                </div>

                <div class="swiper-slide slide" style="background:url(Images/home-slide-4.jpg) no-repeat">
                    <div class="content">
                        <h3>plan your wedding.</h3>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eaque, distinctio, a ex fugiat alias praesentium quidem eum sunt, tempore necessitatibus nisi blanditiis? Quia autem accusantium iure aliquam in magni?</p>
                        <a href="about.php" class="btn">discover more</a>

                    </div>
                </div>

                <div class="swiper-slide slide " style="background:url(Images/home-slide-5.jpg) no-repeat">
                    <div class="content">
                        <h3>plan your wedding.</h3>
                        <p> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut eaque, distinctio, a ex fugiat alias praesentium quidem eum sunt, tempore necessitatibus nisi blanditiis? Quia autem accusantium iure aliquam in magni?</p>
                        <a href="about.php" class="btn">discover more</a>

                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
        
    </section>
    <section class="services">
        <h1 class="heading">our services</h1>

    <div class="swiper service-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <img src="Images/photography.jpg" alt="">
                <div class="content">
                    <h3>photography</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempori</p>
                    <a href="about.php" class="btn">about us</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/registory.jpg" alt="">
                <div class="content">
                    <h3>wedding registory</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempori</p>
                    <a href="about.php" class="btn">about us</a>
                </div>

            </div>



            <div class="swiper-slide slide">
                <img src="Images/guests.jpg" alt="">
                <div class="content">
                    <h3>guest list</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempori</p>
                    <a href="about.php" class="btn">about us</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/cake.jpg" alt="">
                <div class="content">
                    <h3>wedding cake</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempor.</p>
                    <a href="about.php" class="btn">about us</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/ceremony.jpg" alt="">
                <div class="content">
                    <h3>wedding ceremony</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempori.</p>
                    <a href="about.php" class="btn">about us</a>
                </div>

            </div>

            <div class="swiper-slide slide">
                <img src="Images/dinning.jpg" alt="">
                <div class="content">
                    <h3>fine dining</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus saepe fuga tempori</p>
                    <a href="about.php" class="btn">about us</a>
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