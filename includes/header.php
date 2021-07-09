<?php include "includes/db.php"; ?>



<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://kit.fontawesome.com/77b7d0f569.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Livvic:wght@100;400;500;600;700&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/contact.css">
    
</head>



<body>

    <navbar>
        <!-- Topbar Area Start -->
        <div class="topbar-area">
            <div class="container">
                <div class="row rs-vertical-middle">
                    <div class="col-lg-2">
                        <div class="logo-part">
                            <a href="index.php"><img src="img/logo-dark_2.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10 text-right">
                        <ul class="rs-contact-info">
                            <li class="contact-part">
                                <i class="fa fa-map-marked-alt"></i>
                                <span class="contact-info">
                                <span>Address</span> 05 kandi BR. New York
                                </span>
                            </li>
                            <li class="contact-part">
                                <i class="fa fa-envelope"></i>
                                <span class="contact-info">
                                <span>E-mail</span>
                                <a href="#"> support@merwusch.com</a>
                                </span>
                            </li>
                            <li class="contact-part no-border">
                                <i class="fa fa-phone"></i>
                                <span class="contact-info">
                                <span>Phone</span> (123) 456 7890
                                </span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar Area End -->
        <nav class="topnav">


            <ul>

                <li><a class="text-white active" href="index.php">Home <i class="fa fa-plus"></i></a>
                    <ul class="sub-menu">
                        <li><a class="text-dark" href="index.php">Multipages</a></li>
                        <li><a class="text-dark" href="index.php">Onepages</a></li>
                    </ul>


                </li>

                <li><a class="text-white" href="about.php">About</a></li>

                <li><a class="text-white" href="services.php">Services <i class="fa fa-plus"></i></a>
                    <ul class="sub-menu">
                        <li><a class="text-dark" href="services.php">Software Developement</a></li>
                        <li><a class="text-dark" href="services.php">Web Developement</a></li>
                        <li><a class="text-dark" href="services.php">Analytic Solutions</a></li>
                        <li><a class="text-dark" href="services.php">Cloud and DevOps</a></li>
                        <li><a class="text-dark" href="services.php">Project Design</a></li>
                        <li><a class="text-dark" href="services.php">Data Center</a></li>
                    </ul>

                </li>

                <li><a class="text-white" href="pages.php">Pages <i class="fa fa-plus"></i></a>
                    <ul class="sub-menu">
                        <li><a class="text-dark" href="pages.php">Services</a></li>
                        <li><a class="text-dark" href="pages.php">Our Team</a></li>
                        <li><a class="text-dark" href="pages.php">Single Team</a></li>
                        <li><a class="text-dark" href="pages.php">Case Studies</a></li>
                        <li><a class="text-dark" href="pages.php">Shop</a></li>
                        
                        <ul class="sub-menu">
                        <li><a class="text-dark" href="#">Shop</a></li>
                        <li><a class="text-dark" href="#">Shop Single</a></li>
                        <li><a class="text-dark" href="#">Cart</a></li>
                        <li><a class="text-dark" href="#">Checkout</a></li>
                        <li><a class="text-dark" href="myaccount.php">My Account</a></li>
                        </ul>

                        <li><a class="text-dark" href="pages.php">Pricing</a></li>
                        <li><a class="text-dark" href="pages.php">Faq</a></li>
                    </ul>

                </li>

                <li><a class="text-white" href="blog.php">Blog <i class="fa fa-plus"></i></a>
                    <ul class="sub-menu">
                        <li><a class="text-dark" href="blog.php">Blog</a></li>
                        <li><a class="text-dark" href="blogdetails.php">Blog Details</a></li>
                    </ul>


                </li>

                <li><a class="text-white" href="contact.php">Contact</a></li>

                <li><a href="#"><i class="fa fa-search"></i> </a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                <li>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>


            </ul>

        </nav>

    </navbar>

