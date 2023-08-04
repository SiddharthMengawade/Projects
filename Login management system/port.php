<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="images/portfolio.png">

    <!-- Bootstrap 5 CDN Links -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Custom File's Link -->
    <style>

            
/* ------------------
1. General
2. Navbar
3. Banner
4. About
5. Services
6. Portfolio
7. Blog
8. Contact
9. Footer
-------------------- */


/* 1 General */
@import url('https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap');


* {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

:root {
    /* Background Color */
    --primary-color: #4458dc;
    --secondary-color: #854fee;
    --bg-white: #fff;
    --bg-light: #faf8ff;
    --bg-black: #000;
    --bg-gray: #eee;
    --gradient: linear-gradient(to right, #4458dc 0%, #854fee 100%), radial-gradient(circle at top left, #4458dc, #854fee);

    /* Text Color */
    --primary-text: #4458dc;
    --secondary-text: #854fee;
    --text-white: #fff;
    --text-black: #000;
    --text-gray: #777;

    /* Font Family */
    --primary-font: 'Rubik', sans-serif;
    --secondary-font: 'Roboto', sans-serif;
}

body {
    font-family: var(--secondary-font);
    width: 100%;
    background-size: 100%;
    background-image: url('');
    background-repeat:no-repeat;
    background-color: var(--gradient);
    /* background-color:var(--bg-light); */
    filter:alpha(opacity=40);
    height:100%;
    width:100%;
    z-index:0.1; 
}


a {
    text-decoration:none;
}


/* 1 Custom CSS */

::-webkit-scrollbar {
    width: 0.500rem;
}

::-webkit-scrollbar-track {
    background: var(--bg-gray);
}

::-webkit-scrollbar-thumb {
    background: rgb(32, 31, 28);
}

section {
    padding: 3rem 0;
}

.main-btn {
    display: inline-block;
    font-family: var(--primary-font);
    font-weight: 500;
    font-size: 0.875rem;
    line-height: 2.875rem;
    text-align: center;
    cursor: pointer;
    text-transform: uppercase;
    border-radius: 1.3125rem;
    box-shadow: 0 0.625rem 1.875rem rgb(118 85 225 / 30%);
    border: double 0.125rem transparent;
    padding: 0 2.0625rem;
    transition: all .3s ease-in-out;
    --webkit-transition: all .3s ease-in-out;
}

.primary-btn {
    background-image: var(--gradient);
    color: var(--text-white);
    box-shadow: #777;
    
}

.primary-btn:hover {
    border-color: var(--secondary-color);
    background: var(--bg-white);
    color: var(--secondary-text);
    box-shadow:green;
    text-decoration: none;
}

.secondary-btn {
    background-image: var(--bg-white);
    color: var(--secondary-text);
    border-color: var(--secondary-color);
    text-decoration: none;
    
}

.secondary-btn:hover {
    background: var(--gradient);
    color: var(--text-white);
    box-shadow: none;
    text-decoration: none;

}

h1 {
    font-size: 4.075rem;
    line-height: 4.55rem;
    font-weight: 700;
    color: Gray;
    margin-bottom: 1.25rem;
    font-family: var(--primary-font);
}


h1
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -525deg,
    #155715 100%,
    #FF5733 100%,
    #ff1361 10%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 190% auto;
  color: #fff;
  background-clip: text;
  
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 4.0rem;
}

@keyframes textclip {
  to {
    background-position: 130% center;
  }
}

 h1,h2 
{
   text-transform: uppercase;
  background-image: linear-gradient(
    -525deg,
    #231557 0%,
    #2f075b 29%,
    #ff1361 67%,
    #fff800 100%
  );
  background-size: auto auto;
  background-clip: border-box;
  background-size: 200% auto;
  color: #fff;
  background-clip: text;
  
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  animation: textclip 2s linear infinite;
  display: inline-block;
      font-size: 4.0rem;
}

@keyframes textclip {
  to {
    background-position: 150% center;
  }
}

h2 {
    font-weight: 500;
    font-size: 2.5rem;
    line-height: 3.4375rem;
    margin-bottom: 1.5625rem;
    color: var(--text-black);
    font-family: var(--primary-font);
}

h3 {
    font-weight: 700;
    font-size: 2.25rem;
    line-height: 3.125rem;
    margin-bottom: 0.9375rem;
    color: var(--text-black);
    font-family: var(--primary-font);
    text-transform: uppercase;
}

img{
    transition: cubic-bezier(0.075, 0.82, 0.165, 1);
}

h5 {
    font-weight: 500;
    font-size: 1.5rem;
    margin-bottom: 2.1875rem;
    color: var(--text-black);
}

p {
    color: var(--text-gray);
    font-size: 1.02rem;
    line-height: 1.725rem;
    font-weight: 400;
}


/* 2 Navbar */

.header_wrapper{
    height: 10px;
    width: fit-content;
}





.header_wrapper .navbar {
    
   
    padding: 0.9375rem 0;
    -webkit-transition: all .2s linear;
    -o-transition: all .2s linear;
    transition: all .2s linear;
    -webkit-backface-visibility: visible;
    
    padding: auto;
    
}

.header_wrapper .navbar:hover{
 
   

}

.header_wrapper .navbar-brand img {
    max-width: 10rem;
    height: auto;
}

.header_wrapper .navbar-toggler:focus {
    box-shadow: none;
    background-position: top; 
    backface-visibility:hidden;
    background-repeat: initial;
    background-color:white;
  
}

.navbar-toggler-icon{


}

.header_wrapper .nav-item {
    margin: 0 0.625rem;
    size: 10px;
    padding: 0%;

}

.header_wrapper .nav-item .nav-link {
    font-family: var(--primary-font);
    font-size: 1rem;
    font-weight: 500;
    text-transform: uppercase;
    color: var(--text-gray);
    display: inline-block;
    position: relative;
}

.header_wrapper .nav-item .nav-link.active,
.header_wrapper .nav-item .nav-link:hover {
    opacity: 1;
  
    color: var(--primary-text); 
    
    


}

.header-scrolled {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background-color: var(--bg-white);
    -webkit-box-shadow: 0 0.25rem 0.375rem 0 rgba(12, 0, 46, .05);
    box-shadow: 0 0.25rem 0.375rem 0 rgba(12, 0, 46, .05);
}

/* 3 Banner */
.banner_wrapper {
    padding-top: 6.875rem;
    z-index: 1;
    background-image: url('../images/home-banner.png');
    background-repeat: no-repeat;
    background-position: top center;
    background-size: cover;
}

.banner_wrapper .col-lg-7 {
    vertical-align: middle;
    align-self: center;
}

.banner_wrapper .banner-content h2::after {
    content: '';
    width: 60%;
    height: 0.125rem;
    position: absolute;
    top: 50%;
    left: 25%;
    /* background: var(--bg-black); */
    overflow-x: hidden;
}

/* 4 About */
.about_wrapper .single-logo-item {
    width: 100%;
    height: 6.875rem;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    border: 0.0625rem solid var(--bg-gray);
    box-shadow: none;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.about_wrapper .single-logo-item:hover {
    border: 0.0625rem solid transparent;
    box-shadow: 0 0.5rem 1.875rem rgb(118 85 225 / 15%);
}

.about_wrapper .client-info {
    padding: 1.5625rem 1.875rem;
    background: var(--bg-light);
    position: relative;
    margin-top: 0.5625rem;
}

.about_wrapper .client-info:before {
    content: icon;
    position: absolute;
    top: -1.5625rem;
    left: -3.4375rem;
    background: url('../images/client-info.webp');
    background-repeat: no-repeat;
    height: 10.9375rem;
    width: 12.9375rem;
}

.client-info .large {
    color: var(--secondary-text);
    font-family: var(--primary-font);
    font-size: 2.8rem;
    font-weight: 800;
    position: relative;
    z-index: 9;
}

.client-info .smll {
    text-align: left;
    color: var(--text-black);
    font-family: var(--primary-font);
    font-size: 1.55rem;
    margin-left: 2.25rem;
    font-weight: 600;
    text-size-adjust: 10rem;
}

.call-now span {
    font-size: 3.75rem;
    font-weight: 700;
    color: #000;
}

.call-now p {
    color: var(--secondary-color);
    text-transform: uppercase;
    margin-bottom: 0.3125rem;
    display:inline;
}

/* 5 Services */
.services_wrapper .card {
    background-color: var(--bg-light);
    cursor: pointer;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.services_wrapper .card:hover {
    box-shadow: 0 0.9375rem 1.875rem rgb(77 87 222 / 30%);
    background: var(--bg-white);
}

/* 6 portfolio */
.portfolio_wrapper .nav-link {
    font-size: 0.9375rem;
    font-weight: 500;
    margin-right: 0.25rem;
    color: var(--text-black);
    text-transform: uppercase;
}

.portfolio_wrapper .nav-link.active {
    color: var(--secondary-text);
    background-color: transparent;
}

.portfolio_wrapper .portfolio-img {
    position: relative;
    cursor: pointer;
}

.portfolio_wrapper .portfolio-img .overlay {
    position: absolute;
    left: 0;
    top: 0;
    height:100%;
    width: 100%;
    pointer-events: painted;
    -webkit-transition: all .3s ease 0s;
    -moz-transition: all .2s ease 0s;
    -o-transition: all .3s ease 0s;
    transition: all .2s ease 0s;
}

.portfolio_wrapper .portfolio-img:hover .overlay {
    background: rgba(44, 46, 44, 0.202);
}

.portfolio-img .overlay i {
    font-size: 2.25rem;
    color: var(--text-white);
    position: absolute;
    top: 25%;
    left: 25%;
    -webkit-transform: translate(-20%, -30%);
    -moz-transform: translate(-50%, -10%);
    -ms-transform: translate(-50%, -20%);
    -o-transform: translate(-5%, -50%);
    transform: translate(-50%, -50%);
    opacity: 0;
    visibility: hidden;
    -webkit-transition: all .4s ease 0s;
    -moz-transition: all .4s ease 0s;
    -o-transition: all .4s ease 0s;
    transition: all .4s ease 0s;
}

.portfolio_wrapper .portfolio-img:hover i {
    opacity: 1;
    visibility: visible;
    top: 50%;
    left: 50%;
}

/* 7 blog */

.blog_wrapper .card {
    position: relative;
    cursor: pointer;
}

.blog_wrapper .blog_details {
    position: absolute;
    top: 1.25rem;
    left: 1.25rem;
    right: 1.25rem;
    bottom: 1.25rem;
    background: rgba(34, 34, 34, .8);
    color: var(--text-white);
    transition: all .3s linear;
    display: flex;
    align-items: center;
    justify-content: center;
}

.blog_wrapper .card:hover .blog_details {
    background: rgba(68, 88, 220, .85);
}

.blog_wrapper .blog_details .border_line {
    margin: 0.625rem 0;
    background: var(--bg-white);
    width: 100%;
    height: 0.125rem;
}



/* 8 contact */

div{
    padding: 15px;
}
.name {
    width: 50%;
    float: left;
    padding:0px;
    padding-left:4%;
    
} 
.name1 {
    width: 50%;
    float: right;
    padding:0px;
    padding-right:0%;

} 

.newsletter {
    width: 100%;
    height: 100%;
    background-image: url('');
    background-repeat: no-repeat;
    background-size: blue;
    background-position: center;
    padding: 9.375rem 0;
    border-radius: 1.456rem solid red;
    border-color: red;
    border-color: #000;
    background-color: rgb(234, 238, 238);
}

.newsletter:hover{

    box-shadow: 0 0.9375rem 1.875rem rgba(44, 51, 141, 0.3);
    background: rgb(226, 244, 244);

}

.newsletter input {
    line-height: 3rem;
    padding: 0 1.5625rem;
    border: 0.125rem solid var(--bg-gray);
    
    font-weight: 450;
    border-radius: 1.3125rem;
    /* color: var(--text-white); */
}

/* .form-control:focus {
    color: var(--text-blue);
    background-color:rgba(191, 167, 238, 213, 13);
    border-color:var(--bg-gray);
    outline: 1;
    box-shadow: rgb(162, 108, 41);
} */
/* 
.form-control::placeholder {
    color: var(--text-black);
    text-emphasis-color: red; */
/* } */

/* footer */
.close 
{
    background-color: #777;
}

.close:hover
{
    color: red;
    
}





.footer_wrapper2 {
    max-width:100%;
    height: auto;
    background-color:whitesmoke;
}
.footer_wrapper2:hover{
    box-shadow: 0 0.9375rem 1.875rem rgba(44, 51, 141, 0.3);
    background: rgb(226, 244, 244);
  
}
.footer_wrapper .footer-logo img {
    max-width: 12.5rem;
    height: auto;
}

.footer_wrapper .social-icon li {
    margin: 0.375rem;
}

.footer_wrapper .social-icons a {
    line-height: 1.875rem;
    font-size: 1.5625rem;
    display: inline-block;
    color: var(--text-black);
    text-align: center;
    margin: 0 0.625rem;
}

.footer_wrapper .social-icons a:hover {
    color: var(--primary-color);
}

.footer_wrapper .copyright-text p {
    font-size: 0.6875rem;
    line-height: 1.25rem;
    font-weight: 600;
}

.footer_wrapper .footer-text a {
    color: var(--primary-color);
}

/*Responsive Design*/

@media (max-width: 1199.5px) {
    h1 {
        font-size: 3.75rem;
    }

    h2 {
        font-size: 2.1875rem;
    }

    h3 {
        font-size: 1.875rem;
        line-height: 2.6875rem;
    }

    h4 {
        font-size: 1.875rem;
        line-height: 1.6875rem;
    }

    h5 {
        font-size: 1.0625rem;
    }

    /* blog */
    .blog_wrapper .blog_details {
        position: absolute;
        top: 0.3125rem;
        left: 0.3125rem;
        right: 0.3125rem;
        bottom: 0.3125rem;
    }
}

@media (max-width:991px) {

    /* 2 Navbar */

    .header-scrolled {
        height: auto;
    }

    .header_wrapper .navbar-collapse {
        margin-top: -0.125rem;
        background-color:transparent;
        -webkit-text-stroke: #777;
    }

    .header_wrapper .menu-navbar-nav {
        text-align: center;
        background-color:white;
        padding-bottom: 1.375rem;
    }

    .header_wrapper .nav-item .nav-link {
        margin-top: 0.9375rem;
        height: auto;
    }
}

@media (max-width: 767px) {

    /* custom css */
    section {
        padding: 10rem 0;
    }

    h1 {
        font-size: 2.5rem;
        line-height: 3rem;
    }

    h2 {
        font-size: 1.875rem;
        line-height: 2.375rem;
    }

    h3 {
        font-size: 1.5625rem;
        line-height: 2.1875rem;
    }

    /* about */
    .client-info div {
        justify-content: center;
    }

    .about_wrapper .client-info:before {
        top: 0.25rem;
        left: 2.8125rem;
    }
}

@media (max-width: 575.5px) {

    .blog_wrapper .blog_details {
        position: absolute;
        top: 2.1875rem;
        left: 2.1875rem;
        right: 2.1875rem;
        bottom: 2.1875rem;
    }
}

@media (max-width: 390px) {

    /* top banner */
    .banner_wrapper .banner-content h2::after {
        left: 34%;
    }
}
        
      
    </style>


</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="90" onload="welcome()">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- Navbar section -->
    <header class="header_wrapper">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a class="navbar-brand" href="#footer">
                    <img src="images/logo.png" class="img-fluid" alt="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-stream navbar-toggler-icon"></i>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav menu-navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#home">Home</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#about">About</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#services">Skills</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#education">Education</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Navbar section exit -->

    <!-- Banner section -->
    <section id="home" class="banner_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-lg-1 order-2 banner-content">
                    <h2 class="text-uppercase position-relative">Hello</h2>
                    
                    <h1 class="text">I am Abhishek Pande!!</h1>
                    <h5 class="text-uppercase"> Software Engineer</h5>
                    
                    <div class="mt-5">
                        <a class="main-btn primary-btn" href='pdf/abhishek.pdf'>COVER PAGE</a>
                        <a class="main-btn secondary-btn ms-4" href='pdf/abhishek.pdf'>Get CV</a>
                    </div>
                </div>
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="top-right-img">
                        <img src="images/banner-image.png" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner section exit -->

    <!-- About section -->
    <section id="about" class="about_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <img src="images/about-us.png" class="img-fluid" alt="About Us">
                </div>
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <h3>let’s <br>Introduce about <br>myself</h3>
                    <h4><b><i class="fa-solid fa-hand-wave"></i>Hi I'm Abhishek!</b></h4>
                        <p>
                        </p>
                        <p>I'm a Computer Engineer at Pune.I am Pursuing my graduation from Sinhgad College of
                            Engineering with a degree Electronics and Telecommunication Engineering and a solid
                            Knowledge and experience in Technology and Computer Science.</p>
                        <a href='pdf/abhishek.pdf' class="main-btn primary-btn mt-4">Download CV</a>

                </div>
            </div>
            <div class="row justify-content-center pt-5">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/sinhgad.png" class="img-fluid" alt="sinhgad">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/google.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/corsera.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/infosys.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/udemy.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/TVS.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/leet.png" class="img-fluid">
                            </div>
                        </div>
                        <!-- <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/accenture.png" class="img-fluid">
                            </div>
                        </div> -->
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/code.png" class="img-fluid">
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 mb-4">
                            <div class="single-logo-item">
                                <img src="images/code1.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-2 col-lg-4 col-md-10">
                    <div class="client-info">
                        <div class="d-flex">
                            <span class="large">Fresher'23</span>
                            <span class="smll"><br><br></span>
                        </div>
                        <div class="call-now d-flex py-4">
                            <div>
                                <span class="fa fa-phone-alt"></span>
                            </div>
                            <div class="ms-4">
                                <p>call us now</p>
                                <h5>(+91)-755-825-8990</h5>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- About section exit -->

    <!-- Services section -->
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br><br></br>
    <section id="services" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>SKILLS</h2>
                    <p>Always ready to try hands-on with new Technology.<br class="d-none d-lg-block">
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/program.png">
                        </div>
                        <h4 class="text-uppercase mt-4 mb-3">PROGRAMMING LANGUAGES</h4>
                        <p> Java, Core Java, C, JavaScript,

                            SQL, Php, Python</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/tool.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">TOOLS</h5>
                        <p>Eclipse, Visual Studio code</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/database.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">DATABASE</h5>
                        <p>MYSQL, MongoDB</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/tech.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">Technology</h5>
                        <p>Deep Learning, Selenium</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Services section exit -->

    <!-- portfolio Section -->
    <section id="portfolio" class="portfolio_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-left mb-md-5 mb-2">
                    <h2>QUALITY WORK <br>RECENTLY DONE PROJECT</h2>
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-one-tab" data-bs-toggle="pill" data-bs-target="#pills-one" type="button" role="tab" aria-controls="pills-one" aria-selected="true">Popular</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-two-tab" data-bs-toggle="pill" data-bs-target="#pills-two" type="button" role="tab" aria-controls="pills-two" aria-selected="true">Latest</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-three-tab" data-bs-toggle="pill" data-bs-target="#pills-three" type="button" role="tab" aria-controls="pills-three" aria-selected="true">Upcoming</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-one" role="tabpanel" aria-labelledby="pills-one-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="./images/Whatapp.png" class="img-fluid w-100">

                                    <div class="overlay"><a href=""> <i class="fas fa-eye"></i></a></div>
                                </div>
                                <h5 class="mb-0 mt-4">Automated Whatapp Sender</h5>
                                <p>Python</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="./images/login.png" class="img-fluid w-100">
                                    <div class="overlay"> <i class="fas fa-eye"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">Login page Management System using Php</h5>
                                <p>JavaScript, AngularJS</p>
                            </div>
                            <!-- <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <img src="./IMAGES/postman.png" class="img-fluid w-100">
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div> -->
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-two" role="tabpanel" aria-labelledby="pills-two-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <!-- <img src="./images/portfolio/portfolio4.webp" class="img-fluid w-100"> -->
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <!-- <img src="./images/portfolio/portfolio5.webp" class="img-fluid w-100"> -->
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <!-- <img src="./images/portfolio/portfolio6.webp" class="img-fluid w-100"> -->
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-three" role="tabpanel" aria-labelledby="pills-three-tab">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">

                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <!-- <img src="./images/portfolio/portfolio8.webp" class="img-fluid w-100"> -->
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <div class="portfolio-img">
                                    <!-- <img src="./images/portfolio/portfolio9.webp" class="img-fluid w-100"> -->
                                    <div class="overlay"> <i class="fas fa-plus"></i></div>
                                </div>
                                <h5 class="mb-0 mt-4">MINIMAL DESIGN</h5>
                                <p>Animated, portfolio</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- portfolio Section exit -->

    <!-- blog Section -->
    <section id="blog" class="services_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>WHAT I DO</h2>
                    <p>Strategy, Design and a bit of magic<br class="d-none d-lg-block">
                    </p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/exp.png">
                        </div>
                        <h4 class="text-uppercase mt-4 mb-3">EXPLORING</h4>
                        <p>Programming Skills, Deep Learning, Problem Solving

                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/c.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">CREATING</h5>
                        <p>Web Applications, Coding Projects, Professional Network</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/l.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">LEARNING</h5>
                        <p>Google Cloud, Machine Learning</p>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 text-center py-5 px-3">
                        <div>
                            <img src="./images/e.png">
                        </div>
                        <h5 class="text-uppercase mt-4 mb-3">ENJOYING</h5>
                        <p>Coding, Playing Chess, Connecting with new Peoples</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- <section id="blog" class="blog_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center mb-5">
                    <h2>What I DO</h2>
                    <p>Is give may shall likeness made yielding spirit a itself togeth created after sea <br
                            class="d-none d-lg-block">
                        is in beast beginning signs open god you're gathering ithe</p>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="./IMAGES/banner-image.png">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">Social Life</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="./IMAGES/postman.png">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">POLITICS</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="./images/blog/blog2.webp">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">FOOD</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 mb-4">
                    <div class="card rounded-0 border-0 p-0">
                        <img src="./images/blog/blog.webp">
                        <div class="blog_details">
                            <div class="blog_text text-center">
                                <h5 class="text-white mb-0">Social Life</h5>
                                <div class="border_line"></div>
                                <p class="text-white">Enjoy your social life together</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- blog Section exit -->

    <!-- career -->

    <section id="education" class="about_wrapper">
        <div class="container">
            <div class="row align-items-center">
                <div class="text-center services-title col-12">
                    <h2 class="text-uppercase title-text" style="position: relative;">Education</h2>
                        <p>Educational Background</p>
                </div>
                <div class="col-12">
                    <div class="name" style="display: inline-block;">
                        <h4><Strong>Engineering</Strong></h4>
                        <p>Aug 2019 - June 2023</p>
                    </div>
                    <div class="name1">
                        <h4>Sinhgad College Of Engineering, Pune</h4>
                        <p>Electronics and Telecommunication Engineering</p>
                    </div>
                </div>
                <div class="name">
                    <h4><strong>Engineering(Honour)</strong></h4>
                    <p>June 2021-June 2023</p>
                </div>
                <div class="name1" style="display: inline-block;">
                    <h4>Sinhgad College Of Engineering, Pune</h4>
                    <p>Cyber Security</p>
                </div>
            </div>
            <div class="name">
                <h4 style=""><strong>School-HSC</strong></h4>
                <p>June 2018-June 2019</p>
            </div>
            <div class="name1" style="display: inline-block;">
                <h4>Swami Vivekanand Junior College, Hadgaon
                </h4>
                <p>Science-PCMB</p>
            </div>
        </div>

        <div class="name">
             <h4 style="padding-left: 17.5%;"><strong>School-SSC</strong></h4>
            <p style="padding-left: 17.5%;">June 2016-June 2017</p>
        </div>
        <div class="name1" style="display: inline-block;">
            <h4>Swami Vivekanand Madhyamin Vidhayala, Hadgaon
            </h4>
            <p>Mathematics</p>
        </div>
        </div>









        </div>


        </div>



    </section>
    <br></br>
    <br></br>

    <br></br>

    <br></br>
    <br></br>
    <br></br>

    <!-- career end -->

    <!-- Automatic Popup -->
    <!-- <div class="popup">
        <button id="close">&times;</button>
        <h2>This Is The Title</h2>
        <p>
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita distinctio fugiat alias iure qui, commodi minima magni ullam aliquam dignissimos?
        </p>
        <a href="#">Let's Go</a>
    </div> -->

    <!-- End popup -->

    <!-- Footer section -->
    <section id="contact" class="footer_wrapper mt-3 mt-md-0">
        <div class="container">
            <div class="row">
                <div class="col-12 newsletter text-center px-4">
                    <div>
                        <h3 class="text-black">Let's Contact Me</h3>
                        <p class="text-black"></p>
                       
         
                        <form class="row g-3 justify-content-center mt-4" id="form1">
                            <div class="col col-sm-6 col-lg-4">
                                <input type="email" id="email1" class="form-control"   class="text-black" placeholder="Email address">
                            </div>
                            
                            <div class="col col-auto">
                                <button type="submit"  id="start"  class="main-btn secondary-btn border-white mb-3" data-bs-target="#modalContactForm"  data-bs-toggle="modal" onclick="msg()">Get Started</button>
                                
                            </div>
                        
                    
                          
                        </form>
                         
                       

                        <div class="modal fade"  id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document" id="model">
                                <div class="modal-content">
                                    <div class="modal-header text-center">
                                        <h4 class="modal-title w-100 font-weight-bold" style="color:gray">Write to Me</h4>
                                        <button type="button" class="close" data-bs-target="modal" data-dismiss="modal" data-bs-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
 


                                <form method="post" id="form" action="javascript:sendmail()">
                                    <div class="modal-body">
                                        <div class="md-form mb-5">
                                            <input type="text" id="name" class="form-control validate" name="Name" id="name" placeholder="Enter your Name" required>

                                        </div>




                                        <div class="md-form mb-5">

                                            <input type="email" id="email" class="form-control validate" name="email" placeholder="Enter Email"  required>

                                        </div>

                                        <div class="md-form mb-5">

                                            <input type="text" id="sub" name="sub" class="form-control validate" placeholder="Enter Subject"  required>
                                            

                                        </div>

                                        <div class="md-form mb-5">

                                            <input type="tel" id="phone" name="phone" class="form-control validate" placeholder="Enter your phone number"  required>

                                        </div>


                                        <div class="md-form">

                                            <textarea type="text" id="t" class="form-control validate" rows="4" placeholder="Please Enter your message" name="text" required></textarea>


                                        </div>
                                        <div class="modal-footer d-flex justify-content-center">

                                            <button type="submit"  id="send" onsubmit="sendmail()"  class="main-btn secondary-btn border-white mb-3">Send</button>
                                                
                                        </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                </form>
            </div>
        </div>
        </div>
        </div>
       
        <section id="footer" class="footer_wrapper2 mt-3 mt-md-0">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 text-center">
                        <div class="footer-logo mb-3 mb-md-0">
                            <img src="images/logo.png">
                        </div>
                        <div class="my-4 social-icons">
                            <h5>Connect</h5>
                            <ul class="list-unstyled d-flex justify-content-center align-items-center">
                                <li><a href="#"><i class="fab fa-Linkdin"></i></a></li>
                                <li><a href="https://twitter.com/UddhavAbhishek?t=JswSB4R3v7XJi0i06oZEIg&s=08"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/abhi_pande_9623/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCL9EJsb0iWvr8U3PKqq5PjA"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-12">
                        <p class="footer-text text-center my-2">Copyright © 2023 All rights reserved
                            </i> <a href="#"></a>
                        </p>

                        <h5 style="text-align:center">❤️Portfolio designed by <strong>Abhishek Uddhav Pande</strong>❤️</h5>

                    </div>
                </div>
            </div>
        </section>

        <!-- Footer section exit -->

        <!-- Bootstrap 5 JS CDN Links -->


        <!-- Custom Js Link -->
        
        <script
  src="https://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>



        <script>

       function welcome() {
            
            
               Swal.fire({
              
              icon: 'success',
              title: 'Welcome to my Portfolio',
              showConfirmButton: false,
              text: 'Abhishek pande',
              timer: 5000
});
         }
            function sendmail(){


                var name = $('#name').val();
			    var email = $('#email').val();
			    var subject = $('#sub').val();
                var message = $('#t').val();
                var phone = $('#phone').val();

			// var body = $('#body').val();

			var Body='Name: '+name+'<br>Email: '+email+'<br>Subject: '+subject+'<br>Phone: '+phone+'<br>Message: '+message;
		
            Email.send({
            SecureToken:"9ba0717c-14d9-41e9-8af8-10203b63c261",
            To : 'gexam2023@gmail.com',
            From : "abhishek.scoe.it@gmail.com",
            Subject :"PortFolio",
            Body :"Hello, I am "+ name + " <br> "+Body
         }).then(
           message=>{
            
            console.log(message);
            if(message==="OK")
            {
              
                Swal.fire({
                         icon: "success",
                         title: "Message Successfully Send to Abhishek",
                         text: "Abhishek will connect with you!",
                         
                     }).then(Ok=>{
                        
                        if(Ok)
                        {
                            window.location.reload();
                            
                        }

                     });
                     
                     
                     return true;
                   
               

              
                
            }else{
                console.error(message);
                
                swal({
                      title: "failed",
                     text: "Your message not send to Abhishek",
                       icon: "error"

                    });

        
                    return false;
            }
           }

         

        );

        }
            
        </script>

        <script>
      

    
    



// Header Scroll
let nav = document.querySelector(".navbar");
window.onscroll = function () {
    if(document.documentElement.scrollTop > 20){
        nav.classList.add("header-scrolled");
    }else{
        nav.classList.remove("header-scrolled");
    }
} 

// nav hide 
let navBar = document.querySelectorAll(".nav-link");
let navCollapse = document.querySelector(".navbar-collapse.collapse");
navBar.forEach(function (a){
    a.addEventListener("click", function(){
        navCollapse.classList.remove("show");
    })
})




// Get started button

function msg() {



    var value=document.getElementById('email1').value;
    
    document.getElementById("email").value=value;
}


// send button

  $("#send").click(function(){
     
   var name= $("#name").val();
   var email=$("#email").val();
   var sub =$("#sub").val();
   var text=$("#t").val();
   var phone=$("#phone").val();

   if(name=='' || name==null)
   {
    // swal("Good job!", "You clicked the button!", "success");
    swal("Full Name required", "", "warning")
    return false;
   }
   if(email=='' || email==null)
   {
    swal("Email required", "", "error")
    return false;
   }if(sub=='' || sub==null)
   {
    swal("Subject required", "", "warning")
    return false;
   }
   if (text=='' || text==null) {
    swal("Text required", "", "warning")
    return false;
   } 
   if (phone=='' || phone==null) {
    swal("Phone number is required", "", "warning")
    return false;
   } 

     
    

    
      

   
    
   
   


  }
  
  
  );

//   Start


  $("#start").click(function()
  {
     var emails=$("#email1").val();
       
     if (emails=='' || emails==null) {
        swal("Email required", "", "warning").then((value)=>{
            

            if(value==true)
            {
                window.location.href='/#form1';
                return false;
            }
           

        });
        
     }else{
        // window.location.href='/#form';
        // return true;
        return false;
     }
    


    }
  

  
    
  );
  
 </script>

        
        <div id="welcome"></div>
    
          
         
        
       
</body>

</html>