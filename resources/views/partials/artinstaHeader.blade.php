<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>ArtInsta</title>
    <link rel="shortcut icon" href="./assets/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1e291dc247.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <!-- Font Awesome -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
rel="stylesheet"
/>
<!-- Google Fonts -->
<link
href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
rel="stylesheet"
/>
<!-- MDB -->
<link
href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css"
rel="stylesheet"
/>
</head>
<body>
    <div class="wrapper">
        <header class="header">
            <div class="header1">
                <div class="header-top">
                    <div class="panel-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 d-flex">
                                    <div class="usd">
                                        <span>USD</span>
                                        <i class="fa-solid fa-sort-down" style="font-size: 10px;">&nbsp&nbsp|</i>
                                   
                                </div>
                                    <div class="link d-flex my-auto">
                                        <div class="insta">
                                            <a href="#"><img src="{{ asset('assets/instagram.png') }}" class="img"></a>
                                        </div>
                                        <div class="fb">
                                            <a href="#"><img src="{{ asset('assets/facebook.png') }}" class="img"></a>
                                        </div>
                                        <div class="num">(919) 762-6420</div>
                                    </div>

                                </div>
                                <div class="col-lg-8 col-md-8">
                                    <div class="welcome">
                                        <span >We ship all around USA, Canada, Hawaii& P.R</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-club" id="navbar">
                    <div class="header-middle">
                        <div class="header-content">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2">
                                        <a class="logo" href="#"><img class="img" src="{{ asset('assets/desi-gabbar-logo1.png') }}" class="" width="150" height="55" alt=""></a>
                                    </div>
                                    <div class="col-sm-10 d-flex align-items-center">
                                        <div class="search">
                                            <nav class="navbarr">
                                                <div class="container-fluid">
                                                  <form class="d-flex" role="search">
                                                    <input class="form-control me-2" type="search" placeholder="Search entire store here..." aria-label="Search" >
                                                  </form>
                                                </div>
                                              </nav>
                                        </div>
                                        <div class="cart-header-container d-flex align-middle">
                                            <div class="user-account">
                                                <a href="#">
                                                    <i class="fa fa-user-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="wishlist-icon">
                                                <a href="#">
                                                    <i class="fa fa-heart-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="cart">
                                                <a href="#">
                                                    <img src="{{ asset('assets/CART.png') }}" alt="">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </header>
        