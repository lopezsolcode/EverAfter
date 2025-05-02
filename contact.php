<?php
$con = mysqli_connect('localhost','root', '','weddingplannerdb', '3306');

if(isset($_POST['send'])){
    $name= $_POST['name'];
    $email= $_POST['email'];
    $number= $_POST['number'];
    $plan= $_POST['plan'];
    $address= $_POST['address'];
    $message= $_POST['message'];
    
    $insert= "INSERT INTO `contactform`( `name`, `email`, `number`, `plan`, `address`, `message`) VALUES ('$name','$email','$number','$plan','$address','$$message')";

    mysqli_query($con,$insert);
    header('location:contact.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <!-- font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>

    <section class="contact">
        <h1 class="heading">contact us</h1>
        <form action="" method="post">
            <div class="flex">

                <div class="inputBox">
                    <span>your name</span>
                    <input type="text" placeholder="enter your name here" name="name" required >
                </div>

                <div class="inputBox">
                    <span>your email</span>
                    <input type="email" placeholder="enter your email here" name="email" required >
                </div>

                
                <div class="inputBox">
                    <span>your number</span>
                    <input type="number" placeholder="enter your number here" name="number" required >
                </div>

                <div class="inputBox">
                    <span>choose plan</span>
                    <select name="plan">
                        <option value="basic">basic plan</option>
                        <option value="premium">premium plan</option>
                        <option value="golden">golden plan</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>your address</span>
                    <textarea type="address" placeholder="enter your address" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>your message</span>
                    <textarea type="message" placeholder="enter your message" required cols="30" rows="10"></textarea>
                </div>

            </div>
            <input type="submit" value="send message" name="send" class="btn">

        </form>



    </section>
    <?php @include 'footer.php';?>
    
</div>
<script src="js/script.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


    
</body>
</html>