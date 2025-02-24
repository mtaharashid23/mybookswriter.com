<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/images/favicon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon.png">
    <title><?php echo isset($title) ? $title : "My Book Writer"; ?></title>
    <meta name="description" content="" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.6.1/css/iziModal.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="assets/css/stackedCards.css" />
    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.carousel.css">

    <!-- Default Theme -->
    <link rel="stylesheet" href="assets/owl-carousel/owl.theme.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>
    <header>
        <!-- Header Top Bar -->
        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="left_side">
                            <ul class="contact_info">
                                <li>
                                    <a href="tel: (929) 659 7160">
                                        <i class="fa fa-phone phone-icon"></i>
                                        <span>Call Us: (929) 659 7160</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="right_side">
                            <ul class="social">
                                <li>
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa-brands fa-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href=""><i class="fa-brands fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar_container">
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container">
                    <a class="navbar-brand" href="/">
                         <img loading="lazy" src="assets/images/logo.png" alt="image">
                        <!--My Book Writer-->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="fas fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book-publishing-services">Book Publishing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book-marketing-services">Marketing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book-ghostwriting-services">Ghostwriting</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="book-printing-services">Printing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact-us">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <a href="javascript:;" onclick="popup()" class="btn-black radius_btn hidden-sm popuptrigger" href="/">
                        Lets Get Started
                    </a>
                </div>
            </nav>
        </div>
    </header>