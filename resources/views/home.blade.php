<x-app-layout>

    <!-- SLIDER ------------->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel_">

            <div class="carousel-item active ">
                <div class="imagen_carusel img_1">
                    <div class="slider_info">
                        <span>Hasta 75% de descuento</span>
                        <h1>Plantas Hacen Feliz A La Gente</h1>
                        <a href="">comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="imagen_carusel img_2">
                    <div class="slider_info">
                        <span>Hasta 45% de descuento</span>
                        <h1>Planta Gran Oferta Especial</h1>
                        <a href="">comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="imagen_carusel img_3">
                    <div class="slider_info">
                        <span>Hasta 65% de descuento</span>
                        <h1>Decora Tu Casa Ahora</h1>
                        <a href="">comprar ahora</a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev zinde" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next zinde" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <hr>

    <!-- BANNER DE NUEVAS CATEGORIAS ------------->

    <section id="nueva_categoria">

        <div class="banner">
            <img src="{{ asset('img/banner1.jpg') }}"" alt="">
            <div class="content">
                <span>Nueva Categoria</span>
                <h3>Plantas de<br> casa</h3>
                <a href="#" class="btn">ver ahora</a>
            </div>
        </div>

        <div class="banner">
            <img src="{{ asset('img/banner2.jpg') }}" alt="">
            <div class="content">
                <span>Nueva Categoria</span>
                <h3>Plantas de<br> oficina</h3>
                <a href="#" class="btn">ver ahora</a>
            </div>
        </div>

    </section>

    <!-- CATEGORIAS ------------->

    <section id="categorias">

        <h1 class="heading">Compra por Categoria</h1>

        <ul id="autoWidth" class="cs-hidden cate">
            <li class="box">
                <img src="{{ asset('img/cat1.jpg') }}" alt="">
                <div class="content">
                    <h3>Bonsai</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat2.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Hogar</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat3.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Oficina</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat4.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Regalo</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat1.jpg') }}" alt="">
                <div class="content">
                    <h3>Bonsai</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat2.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Hogar</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat3.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Oficina</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
            <li class="box">
                <img src="{{ asset('img/cat4.jpg') }}" alt="">
                <div class="content">
                    <h3>Para Regalo</h3>
                    <a href="#" class="btn">ver ahora</a>
                </div>
            </li>
        </ul>
    </section>

    <!-- NUEVAS PLANTAS ------------->

    <section id="new_plants">
        <h1 class="heading">Nuevos Productos</h1>

        <div class="plants_list">
            
            <!-- Card ------------->
            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product1.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

            <!-- Card ------------->
            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product2.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

            <!-- Card ------------->
            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product3.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product4.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product5.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

            <div class="plant_box">
                <div class="plant_img">
                    <img src="{{asset('img/products/product6.jpg')}}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>PlantName</h2>
                    <h3>Categoria</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta</p>
                    <a href="">comprar</a>
                </div>
            </div>

        </div>
    </section>



</x-app-layout>
