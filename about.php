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
    <h3>about us</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga repellendus voluptate odio natus laboriosam, temporibus magnam quam. Sint eos, tempore vitae qui repudiandae, dolorem, esse enim a necessitatibus placeat beatae!</p>
    <a href="contact.php" class="btn">contact us</a>
    </section>

    <section class="team">
        <h1 class="heading">our team</h1>
            <div class="box-container">

                <div class="box">
                    <img src="Images\team1.jpg" alt="not found">
                    <h3>john doe</h3>
                    <p>wedding planner</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>
                
                <div class="box">
                    <img src="Images\team2.jpg" alt="not found">
                    <h3>john doe</h3>
                    <p>wedding planner</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Images\team3.jpg" alt="not found">
                    <h3>john doe</h3>
                    <p>wedding planner</p>
                    <div class="share">
                        <a href="" class="fab fa-facebook-f"></a>
                        <a href="" class="fab fa-twitter"></a>
                        <a href="" class="fab fa-linkedin"></a>
                        <a href="" class="fab fa-instagram"></a>
                    </div>
                </div>

                <div class="box">
                    <img src="Images\team4.jpg" alt="not found">
                    <h3>john doe</h3>
                    <p>wedding planner</p>
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