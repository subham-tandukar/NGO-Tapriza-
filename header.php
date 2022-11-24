<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NGO</title>

    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

    <!-- font awesome css -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <link rel="stylesheet" href="./assets/css/fontawesome.min.css">

    <!-- swiper css -->
    <link rel="stylesheet" href="./assets/css/swiper-bundle.min.css">

    <!-- UIkit css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.15.13/dist/css/uikit.min.css" />

    <!-- user css -->
    <link href="./assets/css/style.css" rel="stylesheet">
</head>

<body>
<div class="pre-loader">
    <div class="loading">
        <div class="loader-icon">

        </div>
        <div class="img">
            <img src="./assets/img/logo.png" alt="loading">
        </div>
        <span>Loading... Please wait</span>
    </div>
</div>
<header>
        <div class="head uk-visible@l ">
            <div class="uk-container uk-container-expand uk-flex uk-flex-wrap uk-flex-middle uk-flex-between">
                
                    <div class=" head-info">
                        <p><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Kapurdhara, Nepal </p>
                        <p><i class="fas fa-phone-alt uk-margin-small-right"></i>9851238221, (01 4363468), 9841448221 </p>
                    </div>
        
                    <div class=" head-icon">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="uk-margin-small-left"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="uk-margin-small-left"><i class="fab fa-instagram"></i></a>
                    </div>
                
            </div>
        </div>

        <div class="uk-container uk-container-expand">
            <div class="site-nav" uk-sticky="top:300; animation: uk-animation-slide-top;">
                <div class="uk-container uk-container-expand  uk-flex uk-flex-between uk-flex-middle uk-flex-wrap">
                    <div class="logo">
                        <div>
                            <a href="index.php"><img src="./assets/img/logo.png" alt="logo"></a>
                        </div>
                        <div class="uk-margin-left">
                            <p class="p1">Tapriza Association for Social <br> Help In Dolpa(TASHI-D)</p>
                        </div>
                    </div>
                    
                    <nav class="uk-visible@l" uk-navbar>
                        <ul class="navbar uk-flex-middle">
                            <li><a href="index.php" class="nav-item">home</a></li>
                            <li><a href="about-us.php" class="nav-item">about</a></li>
                            <li><a href="event.php" class="nav-item">event</a></li>
                            <li><a href="activities.php" class="nav-item">activities</a></li>
                            <li><a href="partners.php" class="nav-item">partner</a></li>
                            <li><a href="gallery.php" class="nav-item">gallery</a></li>
                            
                            <!-- <li class="dropdown">
                                <a href="#" class="nav-item" >downloads<span uk-icon="icon: chevron-down"
                                        class="dropdown-icon"></span></a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-dropdown-nav">
                                        <li><a href="#" class="dropdown-list">A/C opening form</a></li>
                                        <li><a href="#" class="dropdown-list">Other form</a></li>
                                    </ul>
                                </div>
                            </li> -->
                            <li><a href="contact-us.php" class="nav-item">contact us</a></li>
                            <li><button class="uk-button uk-margin-small-left"><a href="#">Our School</a></button></li>
                        </ul>
                    </nav>
    
                    <div class="uk-hidden@l uk-visible hamburger-menu">
                        <a href="#offcanvas-slide" uk-toggle><span uk-icon="icon: menu"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div id="offcanvas-slide" uk-offcanvas>
            <div class="overlay"></div>
            <div class="uk-offcanvas-bar">
                <button class="uk-offcanvas-close" type="button" title="close" uk-close></button>

                <div class="uk-flex uk-flex-middle uk-flex-center uk-flex-wrap uk-margin-top">
                    <div>
                        <a href="index.php"><img src="./assets/img/logo.png" alt="logo" style="width:60px"></a>
                    </div>
                    <div>
                        <p class="p1 uk-margin-remove-bottom uk-margin-top" style="color:#fff; font-weight:bold">Tapriza Association for Social <br> Help In Dolpa(TASHI-D)</p>
                    </div>
                </div>

                <hr class="uk-margin-remove-bottom">

                <ul class="navbar">
                    <li><a href="index.php">home</a></li>
                    <li><a href="about-us.php">about</a></li>
                    <li><a href="event.php">event</a></li>
                    <li><a href="activities.php">activities</a></li>
                    <li><a href="partners.php">partner</a></li>
                    <li><a href="gallery.php">gallery</a></li>
                
                    <!-- <ul uk-accordion class="uk-margin-remove">                          
                        <li class="uk-margin-remove">
                            <a href="#" class="uk-accordion-title">downloads<span uk-icon="icon: chevron-right"
                                    class="dropdown-icon"></span></a>
                            <div class="uk-accordion-content uk-margin-remove-top">
                                <ul class="uk-nav uk-dropdown-nav">
                                <li><a href="#" class="dropdown-list">A/C opening form</a></li>
                                <li><a href="#" class="dropdown-list">Other form</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul> -->
                    <li><a href="contact-us.php">contact us</a></li>
                   
                </ul>
                <button class="uk-button"><a href="#">Our School</a></button>
                <p style="color:#fff"><i class="fas fa-phone-alt uk-margin-small-right"></i>9851238221, (01 4363468), 9841448221</p>
                <p style="color:#fff"><i class="fas fa-map-marker-alt uk-margin-small-right"></i>Kapurdhara, Nepal</p>
                
                <hr>
                <div>
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-twitter"></i></a>
                <a href="#" class="uk-margin-small-left"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

        <!-- <div class="header-bg"></div> -->
    </header>