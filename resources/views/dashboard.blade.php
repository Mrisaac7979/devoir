<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nota University Home</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Course Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Stylesheets -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="Accueil/styles/bootstrap4/bootstrap.min.css">
    <link href="Accueil/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="Accueil/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="Accueil/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="Accueil/plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="Accueil/styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="Accueil/styles/responsive.css">
</head>
<body>

<div class="super_container">

    <!-- Header -->
    <header class="header d-flex flex-row">
        <div class="header_content d-flex flex-row align-items-center">
            <!-- Logo -->
            <style>
                .logo_container {
                    width: auto; /* Permet au conteneur de s'ajuster à la largeur du contenu */
                    height: auto; /* Permet au conteneur de s'ajuster à la hauteur du contenu */
                    display: flex; /* Utilisez Flexbox pour aligner le contenu */
                    align-items: center; /* Centre le contenu verticalement */
                    margin-left: 20px; /* Pousse le logo vers la gauche de la navbar */
                }

                .logo img {
                    max-width: 50px; /* Définissez la largeur maximale du logo */
                    height: auto; /* Permet au logo de conserver ses proportions */
                    margin-right: 10px; /* Ajoutez un espace entre le logo et le texte */
                }

                .logo span {
                    font-weight: bold; /* Assurez-vous que le texte est en gras */
                    font-size: 1.2em; /* Ajustez la taille de la police selon vos besoins */
                    white-space: nowrap; /* Empêche le texte de passer à la ligne */
                }
            </style>

            <!-- Code HTML -->
            <div class="logo_container">
                <div class="logo">
                    <img src="image/logo-transparent.png" alt="">
                    <span>Nota University</span>
                </div>
            </div>


            <!-- Main Navigation -->
            <nav class="main_nav_container">
                <div class="main_nav">
                    <ul class="main_nav_list">
                        <li class="main_nav_item"><a href="#">home</a></li>

                            <!-- Option de déconnexion -->
                @auth
                    <li class="main_nav_item">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-link">Logout</button>
                        </form>
                    </li>
                @endauth
                    </ul>

                </div>
            </nav>
        </div>
        <div class="header_side d-flex flex-row justify-content-center align-items-center">
            <img src="images/phone-call.svg" alt="">
            <span>+228 79795822</span>
        </div>
        <!-- Hamburger -->
        <div class="hamburger_container">
            <i class="fas fa-bars trans_200"></i>
        </div>
    </header>
    
    <!-- Menu -->
    <div class="menu_container menu_mm">
        <!-- Menu Close Button -->
        <div class="menu_close_container">
            <div class="menu_close"></div>
        </div>
        <!-- Menu Items -->
        <div class="menu_inner menu_mm">
    <div class="menu menu_mm">
    <ul class="menu_list menu_mm">
            <li class="menu_item menu_mm"><a href="#">Home</a></li>
            @auth
                <li class="main_nav_item">
                    <div class="dropdown">
                        <button class="btn btn-link dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form>
                        </div>
                    </div>
                </li>
            @endauth
    </ul>

    
        <!-- Menu Social -->
        <div class="menu_social_container menu_mm">
            <ul class="menu_social menu_mm">
                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li class="menu_social_item menu_mm"><a href="#"><i class="fab fa-twitter"></i></a></li>
            </ul>
        </div>
    </div>
</div>

    </div>

<!-- Home -->
<div class="home">
    <!-- Hero Slider -->
    <div class="hero_slider_container">
        <div class="hero_slider owl-carousel">
            <!-- Hero Slide 1 -->
            <div class="hero_slide">
                <div class="hero_slide_background" style="background-image:url(image/background1.jpg)"></div>
                <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                    <div class="hero_slide_content text-center">
                        <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut"><span>Welcome!</span></h1>
                    </div>
                </div>
            </div>
            
            <!-- Hero Slide 2 -->
            <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(image/background1.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Choose your <span>University</span> now!</h1>
                        </div>
                    </div>
                </div>
                <!-- Hero Slide 3 -->
                <div class="hero_slide">
                    <div class="hero_slide_background" style="background-image:url(image/background1.jpg)"></div>
                    <div class="hero_slide_container d-flex flex-column align-items-center justify-content-center">
                        <div class="hero_slide_content text-center">
                            <h1 data-animation-in="fadeInUp" data-animation-out="animate-out fadeOut">Choose your <span>University</span> now!</h1>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero Slider Navigation -->
            <div class="hero_slider_left hero_slider_nav trans_200"><span class="trans_200">prev</span></div>
            <div class="hero_slider_right hero_slider_nav trans_200"><span class="trans_200">next</span></div>

        </div>
    </div>
</div>

<!-- Hero Boxes -->
                    <div class="hero_boxes">
                        <div class="hero_boxes_inner">
                            <div class="container">
                                <div class="row">
                                <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <i class="fas fa-school svg" style="background-color: white; padding: 10px; border-radius: 50%; font-size: 30px;"></i>
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Universites</h2>
                                <a href="{{ route('universites.universites_liste') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 hero_box_col">
                        <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                            <!-- Utilisation d'une autre icône de notation en blanc -->
                            <i class="fas fa-clipboard-list svg" style="color: white; font-size: 30px;"></i>
                            <div class="hero_box_content">
                                <h2 class="hero_box_title">Notation</h2>
                                <a href="{{ route('notations.create') }}" class="hero_box_link">view more</a>
                            </div>
                        </div>
                    </div>

                <div class="col-lg-4 hero_box_col">
                    <div class="hero_box d-flex flex-row align-items-center justify-content-start">
                        <!-- Utilisation de l'icône de classement de Font Awesome et spécification de la classe de taille -->
                        <i class="fas fa-sort-numeric-up svg" style="color: white; font-size: 30px;"></i>
                        <div class="hero_box_content">
                            <h2 class="hero_box_title">Classement</h2>
                            <a href="{{ route('classement.index') }}" class="hero_box_link">view more</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <!-- Footer Content -->
            <div class="footer_content">
                <div class="row">
                    <!-- Footer Column - About -->
        
                    <div class="col-lg-3 footer_col">
    <div class="logo_container">
        <div class="logo">
            <img src="image/logo-transparent.png" alt="Nota University Logo" style="max-width: 50px; height: auto; margin-right: 10px;">
            <span style="font-weight: bold; font-size: 1.2em;">Nota University</span>
        </div>
    </div>
    <p class="footer_about_text" style="width: 250px; text-align: justify;">Explorez la première plateforme de notation des universités du Togo. Obtenez des informations transparentes et pertinentes sur les établissements d'enseignement supérieur du pays, y compris les classements basés sur la qualité de l'enseignement, les infrastructures, la recherche et l'insertion professionnelle. Trouvez la meilleure université pour vous sur Nota University Rating.</p>
</div>


                    <!-- Footer Column - Menu -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Menu</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">Home</a></li>
                                <li class="footer_list_item"><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column - Useful Links -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Useful Links</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_list_item"><a href="#">FAQ</a></li>
                                <li class="footer_list_item"><a href="#">Universities Pictures</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Footer Column - Contact -->
                    <div class="col-lg-3 footer_col">
                        <div class="footer_column_title">Contact</div>
                        <div class="footer_column_content">
                            <ul>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    Kodjoviakope/ Lomé
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    +228 79795822 / 90128669
                                </li>
                                <li class="footer_contact_item">
                                    <div class="footer_contact_icon">
                                        <img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
                                    </div>
                                    kijuniorhounbo@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer Copyright -->
            <div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
                <div class="footer_copyright">
                    <span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                     Nota University Rating
                    </span>
                </div>
                <div class="footer_social ml-sm-auto">
                    <ul class="menu_social">
                        <li class="menu_social_item"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="menu_social_item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</div>

<!-- JavaScript -->
<script src="Accueil/js/jquery-3.2.1.min.js"></script>
<script src="Accueil/styles/bootstrap4/popper.js"></script>
<script src="Accueil/styles/bootstrap4/bootstrap.min.js"></script>
<script src="Accueil/plugins/greensock/TweenMax.min.js"></script>
<script src="Accueil/plugins/greensock/TimelineMax.min.js"></script>
<script src="Accueil/plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="Accueil/plugins/greensock/animation.gsap.min.js"></script>
<script src="Accueil/plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="Accueil/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="Accueil/plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="Accueil/plugins/easing/easing.js"></script>
<script src="Accueil/js/custom.js"></script>

</body>
</html>
