<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Swiper CSS-->
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>

    <!--Fonts Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!--custom CSS-->
    <link rel="stylesheet" href="css/style.css">
    <title>Agencia de Viaje</title>
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
    <!--Services Section Starts-->
    <section class="services">
        <h2 class="heading-title">Nuestros Servicios</h2>
        <div class="box-container">
            <div class="box">
                <img src="images/icon-1.png" alt="">
                <h3>Aventuras</h3>
            </div>
            <div class="box">
                <img src="images/icon-2.png" alt="">
                <h3>Guias Turisticas</h3>
            </div>
            <div class="box">
                <img src="images/icon-3.png" alt="">
                <h3>Trekking</h3>
            </div>
            <div class="box">
                <img src="images/icon-4.png" alt="">
                <h3>Campamentos</h3>
            </div>
            <div class="box">
                <img src="images/icon-5.png" alt="">
                <h3>Todo Terreno</h3>
            </div>
            <div class="box">
                <img src="images/icon-6.png" alt="">
                <h3>Camping</h3>
            </div>
        </div>
    </section>
    <!--Services Section Ends-->
    <!--Home Section  Starts-->
    <section class="home">
        <div class="swiper home-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, descubra,viaje</span>
                        <h3>Viaje a traves del Mundo</h3>
                        <a href="packege.php" class="btn">Descubra Más</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, descubra,viaje</span>
                        <h3>Descubra Nuevos Lugares</h3>
                        <a href="packege.php" class="btn">Descubra Más</a>
                    </div>
                </div>
                <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg)no-repeat">
                    <div class="content">
                        <span>Explore, descubra,viaje</span>
                        <h3>Crea tu Rotero de Viaje</h3>
                        <a href="packege.php" class="btn">Descubra Más</a>
                    </div>
                </div> 
            </div>
           
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>
    <!--Home Section  Ends-->
    <!--Home About Section Starts-->
    <section class="home-about">
        <div class="image">
            <img src="images/about-img.jpg" alt="">
        </div>
        <div class="content">
            <h3>Sobre Nosotros</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod ab atque soluta voluptatum cum optio sequi quos quis facilis laboriosam, odio minima vero possimus eveniet saepe iusto voluptates tempore tenetur.</p>
            <a href="about.php" class="btn">Saber Más</a>
        </div>
    </section>
    <!--Home About Section Ends-->
    <!--Home Packages Section Starts-->
    <section class="home-packages">
        <h2 class="heading-title">Nuestros Paquetes</h2>
        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="images/img-1.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aventura y Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde reprehenderit beatae ipsam.</p>
                    <a href="book.php" class="btn">Ver Oferta</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-2.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aventura y Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde reprehenderit beatae ipsam.</p>
                    <a href="book.php" class="btn">Ver Oferta</a>
                </div>
            </div>
            <div class="box">
                <div class="image">
                    <img src="images/img-3.jpg" alt="">
                </div>
                <div class="content">
                    <h3>Aventura y Tour</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde reprehenderit beatae ipsam.</p>
                    <a href="book.php" class="btn">Ver Oferta</a>
                </div>
            </div>
        </div>
        <div class="load-more"><a href="package.php" class="btn">Cargar Más</a></div>
    </section>
    <!--Home Packages Section Ends-->
    <!--Home Offer Section Starts-->
    <section class="home-offer">
        <div class="content">
            <h3>Descuento de 50%</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Et perspiciatis beatae vel unde? Incidunt possimus fuga ex sunt! Ipsum, quae voluptatem! Ratione porro necessitatibus ipsum!</p>
            <a href="book.php" class="btn">Lear Más</a>
        </div>
    </section>
    <!--Home Offer Section Ends-->
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
        <p>32:45</p>
        <div class="credit">Creado por <span>@Robert Rodriguez  </span> | Todos los derechos Reservados</div>
    </section>
    <!--Footer Section Ends-->


















    
    <!--Swiper Js-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!--Custom Js-->
    <script src="js/main.js"></script>
    

</body>
</html>
