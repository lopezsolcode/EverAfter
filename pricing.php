<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pricing</title>
    <!-- font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>
    <section class="pricing">
    <h1 class="heading">our pricing</h1>
    <div class="box-container">
        <div class="box">
            <h3>basic plan</h3>
            <div class="price">$250/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> photography</p>
                <p> <i class="fas fa-check"></i> bride makeup</p>
                <p> <i class="fas fa-check"></i> wedding ceremony</p>
                <p> <i class="fas fa-check"></i> meals and drinks</p>
                <p> <i class="fas fa-check"></i> guests invitation</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>premium plan</h3>
            <div class="price">$650/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> photography</p>
                <p> <i class="fas fa-check"></i> bride makeup</p>
                <p> <i class="fas fa-check"></i> wedding ceremony</p>
                <p> <i class="fas fa-check"></i> meals and drinks</p>
                <p> <i class="fas fa-check"></i> guests invitation</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>

        <div class="box">
            <h3>golden plan</h3>
            <div class="price">$250/-</div>
            <div class="list">
                <p> <i class="fas fa-check"></i> photography</p>
                <p> <i class="fas fa-check"></i> bride makeup</p>
                <p> <i class="fas fa-check"></i> wedding ceremony</p>
                <p> <i class="fas fa-check"></i> meals and drinks</p>
                <p> <i class="fas fa-check"></i> guests invitation</p>
            </div>
            <a href="contact.php" class="btn">choose plan</a>
        </div>

    </div>
    </section>


    <section class="reviews">
        <h1 class="heading">happy clients</h1>
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