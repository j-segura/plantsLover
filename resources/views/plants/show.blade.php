<x-app-layout>
    <div class="show_plant">
        <div class="img_plant_show">
            <img src="/img/products/{{ $producto->foto }}">
        </div>
        <div class="show_data">
            <h1>{{ $producto->name }}</h1>
            <div class="tags">
                <a href="{{ route('plants.categoria', $producto->categoria) }}">{{ $producto->categoria->name }}</a>
                <a href="{{ route('plants.tamaño', $producto->tamaño) }}">{{ $producto->tamaño->name }}</a>
            </div>
            <p>{{ $producto->extract }}</p>
            <p class="show_description">{{ $producto->description }}</p>
        </div>
    </div>
</x-app-layout>

<style>
    .show_plant {
        width: 100% !important;
        display: grid;
        grid-template-columns: 2fr 3fr;
        min-height: 100vh;
        padding: 30px;
        margin: 0px !important;
    }

    .img_plant_show {
        display: flex;
        justify-content: center;
        align-items: center; 
    }

    .img_plant_show img {
        width: 400px;
        height: 450px;
        object-fit: cover;
    }

    .show_data {
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .show_data h1 {
        text-transform: capitalize;
        font-size: 3rem;
    }

    .tags a {
        background: #8395a77c;
        padding: 2px 15px;
        border-radius: 5px;
        font-size: 0.9rem;
        text-decoration: none;
        color: black;
        transition: 0.2s;
        margin-right: 6px;
    }

    .tags a:hover {
        background: #262626fb;
        color: #fff !important;
    }

    .tags {
        margin-bottom: 1.3rem;
    }

    .show_description {
        color: rgb(110, 110, 110);
    }

    @media (max-width: 830px) {
        .show_plant {
            grid-template-columns: 1fr;
        }
    }
</style>
