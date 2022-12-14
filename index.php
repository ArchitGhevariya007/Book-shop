<html>

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Montserrat:wght@300&family=Poppins&family=Rajdhani:wght@500&family=Roboto+Mono:wght@300;329&display=swap"
        rel="stylesheet">


    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>

    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- Add fancyBox -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>

    <!-- Css -->
    <link rel="stylesheet" href="./css/style.css">



    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
        integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- Navbar : Start-->
    <header>
        <div class="nav-container">
            <a href="#home" class="logo">Book Store</a>
            <nav class="nav-collapse">
                <ul>
                    <li class="menu-item active"><a href="#home">Home</a></li>
                    <li class="menu-item"><a href="#shop">Shop</a></li>
                    <li class="menu-item"><a href="#categories">Categories</a></li>
                    <li class="menu-item"><a href="/php/login.php">Sign in</a></li>
                    <li class="cart"><i class="fas fa-shopping-cart"></i></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Navbar : End-->

    <!-- Div 1 -->
    <div class="container div1">
        <div class="row">
            <div class="col-sm-5">
                <img src="./assets/offer.png" class="offer">
                <input type="button" class="shop-now" value="SHOP NOW">
            </div>
            <div class="col-sm-7">
                <div class="books">
                    <img src="./assets/books.png" class="books">
                </div>
            </div>
        </div>
    </div>


    <!-- Div 2 -->
    <div class="container div2">
        <p class="title">Products
        <p>
    </div>

    <!-- Div 3 -->
    <div class="container text-center div3">
        <input type="button" class="div-3-btn" value="LATEST">
        <input type="button" class="div-3-btn" value="BEST SELLER">
    </div>

    <!-- Div 4 -->

    <div class="div4">
        <div class="row">

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">

                    <div class="product-image">
                        <a href="" onclick="view()" class="image">
                            <img class="img-1" src="./assets/book2.jpeg">
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li ><a view-product data-fancybox data-type="iframe" href="/php/view-product.html" data-preload="false" data-width="1200" data-height="600"  ><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="product-content">
                        <h3 class="title"><a href="#">C.O.D.E</a></h3>
                        <div class="price">$61.99</div>
                        <input type="button" class="div-3-btn add-to-cart" value="ADD TO CART">
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">

                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="img-1" src="./assets/book1.jpg">
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="product-content">
                        <h3 class="title"><a href="#">C.O.D.E</a></h3>
                        <div class="price">$61.99</div>
                        <input type="button" class="div-3-btn add-to-cart" value="ADD TO CART">
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">

                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="img-1" src="./assets/book4.png">
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="product-content">
                        <h3 class="title"><a href="#">C.O.D.E</a></h3>
                        <div class="price">$61.99</div>
                        <input type="button" class="div-3-btn add-to-cart" value="ADD TO CART">
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">

                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="img-1" src="./assets/book3.jpeg">
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="product-content">
                        <h3 class="title"><a href="#">C.O.D.E</a></h3>
                        <div class="price">$61.99</div>
                        <input type="button" class="div-3-btn add-to-cart" value="ADD TO CART">
                    </div>

                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="product-grid">

                    <div class="product-image">
                        <a href="#" class="image">
                            <img class="img-1" src="./assets/book5.png">
                        </a>
                        <ul class="product-links">
                            <li><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                            <li><a href="#"><i class="fa fa-eye"></i></a></li>
                        </ul>
                    </div>

                    <div class="product-content">
                        <h3 class="title"><a href="#">C.O.D.E</a></h3>
                        <div class="price">$61.99</div>
                        <input type="button" class="div-3-btn add-to-cart" value="ADD TO CART">
                    </div>

                </div>
            </div>

            <div class="show-more d-flex justify-content-center">
                <input type="button" class="div-3-btn" value="SHOW MORE">
            </div>

        </div>
    </div>

    <!-- Div 5 -->
    <!-- <div class="div5">

    </div> -->


    <!-- Footer -->
    <footer class="footer d-flex justify-content-center">

        <div class="row">
            <div class="col-md-3 col-sm-4">
                <p class="heading">CATEGORIES</p>
                <p>Novel</p>
                <p>Fiction</p>
                <p>Non-fiction</p>
                <p>Biography</p>
                <p>Bestseller</p>
                <p>Thriller</p>
            </div>

            <div class="col-md-3 col-sm-4">
                <p class="heading">HELP</p>
                <p>Track order</p>
                <p>Returns</p>
                <p>Shipping</p>
                <p>FAQs</p>
            </div>

            <div class="col-md-3 col-sm-4">
                <p class="heading">NEWSLETTER</p>
                <input type="text" class="newsletter" placeholder="Enter your Email">
                <input type="button" class="subscribe" value="SUBSCRIBE">
            </div>

            <p class="copyright">Copyright ??2022 All rights reserved | Made by Archit Ghevariya</p>

    </footer>


    
</body>
<script src='https://cdn.rawgit.com/viljamis/responsive-nav.js/master/responsive-nav.min.js'></script>
<script language="JavaScript" type="text/javascript" src="./js/script.js"></script>
<script language="JavaScript" type="text/javascript" src="./js/navbar.js"></script>

</html>