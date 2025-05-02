<?php
$con = mysqli_connect('localhost','root','','weddingplannerdb', '3306');

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
    <title>contáctanos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <!-- font awesome cdn link-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    
    <link rel="stylesheet" href="css\style.css">
</head>

<body>

<div class="container">
    <?php @include 'header.php';?>

    <section class="contact">
        <h1 class="heading">contáctanos</h1>
        <form id="contact-form" action="contact.php" method="post">
            <div class="flex">

                <div class="inputBox">
                    <span>Tu nombre</span>
                    <input type="text" placeholder="escribe tu nombre aquí" name="name" required >
                </div>

                <div class="inputBox">
                    <span>Tu correo electrónico</span>
                    <input type="email" placeholder="escribe tu correo electrónico aquí" name="email" required >
                </div>

                
                <div class="inputBox">
                    <span>Tu número</span>
                    <input type="number" placeholder="escribe tu número telefónico aquí" name="number" required >
                </div>

                <div class="inputBox">
                    <span>Elige tu plan</span>
                    <select name="plan">
                        <option value="basic">Plan básico</option>
                        <option value="premium">Plan premium</option>
                        <option value="golden">Plan golden</option>
                    </select>
                </div>

                <div class="inputBox">
                    <span>Tu ciudad</span>
                    <textarea type="address" placeholder="escribe aquí tu ciudad y provincia" required cols="30" rows="10"></textarea>
                </div>

                <div class="inputBox">
                    <span>Déjanos un mensaje</span>
                    <textarea type="message" placeholder="escribe aquí tu mensaje" required cols="30" rows="10"></textarea>
                </div>

            </div>
            <input type="submit" value="Enviar Mensaje" name="send" class="btn">

        </form>

    </section>
    <?php @include 'footer.php';?>
    
</div>
<div id="success-modal" class="modal" >
    <div class="modal-content">
        <div class="modal-icon">
            <i class="fas fa-check"></i>
        </div>
            <h3>Mensaje enviado correctamente</h3>
            <p>Gracias por escribirnos. ¡Te contactaremos muy pronto!</p>
            <button onclick="closeModal()" class="btn">Cerrar</button>
        
    </div>
</div> 

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="js/script.js"></script>


    
</body>
</html>