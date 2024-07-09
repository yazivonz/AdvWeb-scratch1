@extends('layouts.dash')



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <!-- box icons  -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
  
</head>

<body>
  @include('dashboard')
 
    <!-- SHOP SECTION  -->
    <section class="shop container">
        <h2 class="section-title">Shop Products</h2>

        <!-- CONTENT  -->
        <div class="shop-content">
            <!-- BOX 1 -->
            <div class="product-box">
                <img src="img/product1.jpg" alt="" class="product-img">
                <h2 class="product-title">Triax Armored 2001</h2>
                <span class="product-price">$79.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 2 -->
            <div class="product-box">
                <img src="img/product2.jpg" alt="" class="product-img">
                <h2 class="product-title">Casio Wrist Camera Watch 2000</h2>
                <span class="product-price">$59.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 3 -->
            <div class="product-box">
                <img src="img/product3.jpg" alt="" class="product-img">
                <h2 class="product-title">Casio Unisex A-158WA-1Q </h2>
                <span class="product-price">$29.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 4 -->
            <div class="product-box">
                <img src="img/product4.jpg" alt="" class="product-img">
                <h2 class="product-title">Casio Pink</h2>
                <span class="product-price">$105</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 5 -->
            <div class="product-box">
                <img src="img/product5.jpg" alt="" class="product-img">
                <h2 class="product-title">Apple Watch Series</h2>
                <span class="product-price">$95</span>
                <i class='bx bx-shopping-bag add-cart'></i> 
            </div>
            <!-- BOX 6 -->
            <div class="product-box">
                <img src="img/product6.jpg" alt="" class="product-img">
                <h2 class="product-title">Seiko Chronograph</h2>
                <span class="product-price">$1400</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 7 -->
            <div class="product-box">
                <img src="img/product7.jpg" alt="" class="product-img">
                <h2 class="product-title">Orient</h2>
                <span class="product-price">$1700</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
            <!-- BOX 8 -->
            <div class="product-box">
                <img src="img/product8.jpg" alt="" class="product-img">
                <h2 class="product-title">Nike Vintage Silver Watch</h2>
                <span class="product-price">$110.5</span>
                <i class='bx bx-shopping-bag add-cart'></i>
            </div>
        </div>
    </section>

    <script src="js/prod.js"></script>

  
</body>

</html>
