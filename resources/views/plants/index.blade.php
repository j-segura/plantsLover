<x-app-layout>

    <!-- SLIDER ------------->

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner carousel_">

            <div class="carousel-item active ">
                <div class="imagen_carusel img_1">
                    <div class="slider_info">
                        <span>Hasta 75% de descuento</span>
                        <h1>Plantas Hacen Feliz A La Gente</h1>
                        <a href="#nueva_categoria">comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="imagen_carusel img_2">
                    <div class="slider_info">
                        <span>Hasta 45% de descuento</span>
                        <h1>Planta Gran Oferta Especial</h1>
                        <a href="#nueva_categoria">comprar ahora</a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="imagen_carusel img_3">
                    <div class="slider_info">
                        <span>Hasta 65% de descuento</span>
                        <h1>Decora Tu Casa Ahora</h1>
                        <a href="#nueva_categoria">comprar ahora</a>
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

        @foreach ($nuevas_categorias as $categoria)
        <div class="banner">
            <img src="/img/{{ $categoria->banner }}">
            <div class="content">
                <span>Nueva Categoria</span>
                <h3 class="categoria_title">{{ $categoria->name }}</h3>
                <a href="{{ route('plants.categoria', $categoria) }}" class="btn">ver ahora</a>
            </div>
        </div>
        @endforeach

    </section>

    <!-- CATEGORIAS ------------->

    <section id="categorias">

        <h1 class="heading">Compra por Categoria</h1>

        <ul id="autoWidth" class="cs-hidden cate">

            @foreach ($categorias as $categoria)

            <li class="box">
                <img src="/img/{{ $categoria->foto }}">
                <div class="content">
                    <h3>{{ $categoria->name_small }}</h3>
                    <a href="{{ route('plants.categoria', $categoria) }}" class="btn">ver ahora</a>
                </div>
            </li>

            @endforeach

            @foreach ($categorias as $categoria)

            <li class="box">
                <img src="/img/{{ $categoria->foto }}">
                <div class="content">
                    <h3>{{ $categoria->name_small }}</h3>
                    <a href="{{ route('plants.categoria', $categoria) }}" class="btn">ver ahora</a>
                </div>
            </li>

            @endforeach
            
        </ul>
    </section>

    <!-- NUEVAS PLANTAS ------------->

    <section id="new_plants">
        <h1 class="heading">Nuevos Productos</h1>

        <div class="plants_list">
            
            <!-- Card ------------->
            @foreach ($plants as $plant)
            <div class="plant_box">
                <div class="plant_img">
                    <img src="/img/products/{{ $plant->foto }}">
                    <span>nuevo</span>
                </div>
                <div class="info_plant">
                    <h2>{{ $plant->name }}</h2>
                    <h3>{{ $plant->categoria->name_small }}</h3>
                    <p>{{ $plant->extract }}</p>
                    <a href="{{ route('show', $plant) }}">comprar</a>
                </div>
            </div>
            @endforeach

        </div>
    </section>


</x-app-layout>

<style>
    .categoria_title {
        max-width: 200px;
    }
</style>