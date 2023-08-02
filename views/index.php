<?php
require_once('resources/initiator.php')
?>

<link rel="stylesheet" href="../css/styleIndex.css" />

<?php
require_once('resources/Header1.php')
?>

<div class="jumbotron jumbotron-fluid collection">
    <div class="container d-flex flex-column align-items-center bg-success">
        <img src="../img/banner.webp" class="custom-image" alt="Responsive image">
    </div>
</div>




<div class="container text-center bg-primary sliderIndex">
    <h2 class="display-4">CATEGORIAS</h2> <!-- Contenedor principal centrado -->
    <div class="row">
        <!-- Las siguientes clases col-md-3 definen que cada columna ocupe 3/12 (1/4) del ancho total en dispositivos medianos y más grandes -->
        <div class="col-md-3">
            <img src="../img/carru2.jpeg" alt="Imagen 1" style="width: 200px; height: 150px;">
        </div>
        <div class="col-md-3">
            <img src="../img/carru3.jpg" alt="Imagen 2" style="width: 200px; height: 150px;">
        </div>
        <div class="col-md-3">
            <img src="../img/carru4.jpg" alt="Imagen 3" style="width: 200px; height: 150px;">
        </div>
        <div class="col-md-3">
            <img src="../img/caru.jpg" alt="Imagen 4" style="width: 200px; height: 150px;">
        </div>
    </div>
</div>

<div class="bestSeller">
    <div class="container">
        <div class="row">
            <!-- Lado izquierdo -->
            <div class="col-md-4">
                <img src="../img/50.jpg" alt="Imagen 1" class="img-fluid img-padding ">
            </div>
            <!-- En medio -->
            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                <p id="bestSellerP1">LO MÁS</p>
                <p id="bestSellerP2">VENDIDO</p>
                <a class="btn btn-primary">VER</a>
            </div>
            <!-- Lado derecho -->
            <div class="col-md-4">
                <img src="../img/50.jpg" alt="Imagen 2" class="img-fluid img-padding">
            </div>
        </div>
    </div>
</div>




<div class="slider-container">
    <div class="slider">
        <div class="slide">
            <img src="../img/1.jfif" alt="Imagen 1">
        </div>
        <div class="slide">
            <img src="../img/2.jfif" alt="Imagen 2">
        </div>
    </div>
    
</div>
<button class="prev-btn" onclick="prevSlide()">Anterior</button>
<button class="next-btn" onclick="nextSlide()">Siguiente</button>

<?php
require_once('resources/Footer.php')
?>