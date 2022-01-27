<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Swiper CSS-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!--Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>book</title>
</head>
<body>
    <!---Header Section Starts-->
    <section class="header">
        <a href="home.php" class="logo">Viajarlo.</a>
        <nav class="navbar">
            <a href="home.php">Inicio</a>
            <a href="about.php">Sobre Nosotros</a>
            <a href="package.php">Paquetes</a>
            <a href="book.php">Lugares</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>
    <!---Header Section Ends-->

    <div class="heading" style="background:url(images/header-bg-3.png)no-repeat">
        <h2>Lugares de Viajes</h2>
    </div>
    <!--booking Section Starts-->
    <section class="booking">
        <h2 class="heading-title">Libro de Viaje!</h2>
        <form action="book_form.php"method="post" class="book-form">
            <div class="flex">
            <div class="inputBox">
                    <span>Nombre :</span>
                    <input type="text" placeholder="Ingrese su nombre aqui" name="name">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="Ingrese su email aqui" name="email">
                </div>
                <div class="inputBox">
                    <span>Telefono :</span>
                    <input type="number" placeholder="Ingrese su número aqui" name="phone">
                </div>
                <div class="inputBox">
                    <span>Direcion :</span>
                    <input type="text" placeholder="Ingrese su Direcion aqui" name="address">
                </div>
                <div class="inputBox">
                    <span>Donde Ir :</span>
                    <input type="text" placeholder="Donde te gustaria Visitar" name="location">
                </div>
                <div class="inputBox">
                    <span>Cuantos Son :</span>
                    <input type="number" placeholder="Cuantos Integrantes" name="guests">
                </div>
                <div class="inputBox">
                    <span>Arribando :</span>
                    <input type="date"name="arrivals">
                </div>
                <div class="inputBox">
                    <span>Saliendo :</span>
                    <input type="date"name="leaving">
                </div>

            </div>
            <input type="submit"value="submit" class="btn"name="send">
        </form>
    </section>
    <!--booking Section Ends-->
    <!--Footer Section Starts-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Link Rapidos</h3>
                <a href="home.php"><i class="fas fa-angle-right"></i>Inicio</a>
                <a href="about.php"><i class="fas fa-angle-right"></i>Sobre Nosotros</a>
                <a href="package.php"><i class="fas fa-angle-right"></i> Paquetes</a>
                <a href="book.php"><i class="fas fa-angle-right"></i>Lugares</a>
            </div>
            <div class="box">
                <h3>Link Extras</h3>
                <a href="#"><i class="fas fa-angle-right"></i>Preguntas</a>
                <a href="#"><i class="fas fa-angle-right"></i>Sobre Nosotros</a>
                <a href="#"><i class="fas fa-angle-right"></i>Terminos de Privacidad</a>
                <a href="#"><i class="fas fa-angle-right"></i>Nuestras Politicas</a>
               
            </div>
            <div class="box">
                <h3>Contactanos</h3>
                <a href="#"><i class="fas fa-phone"></i>+598 123456789</a>
                <a href="#"><i class="fas fa-phone"></i>02 84579635</a>
                <a href="#"><i class="fas fa-envelope"></i>tuviaje@gmail.com</a>
                <a href="#"><i class="fas fa-map"></i>Montevideo, Uruguay - 40000</a>
                
               
            </div>
            <div class="box">
                <h3>Siganos</h3>
                <a href="#" class=""><i class="fab fa-facebook-f"></i>Facebook</a>
                <a href="#" class=""><i class="fab fa-twitter"></i>Twitter</a>
                <a href="#" class=""><i class="fab fa-instagram"></i>Instagram</a>
                <a href="#" class=""><i class="fab fa-linkedin"></i>Linkedin</a>
            </div>
        </div>
        <div class="credit">Creado por <span>@Robert Rodriguez</span></div>
    </section>
    <!--Footer Section Ends-->


















    <!--Custom Js-->
    <script src="js/main.js"></script>
    <!--Swiper Js-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    

</body>
</html>
