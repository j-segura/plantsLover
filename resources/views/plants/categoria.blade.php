<x-app-layout>
    <div class="pading">
        <section id="new_plants">
            <h1 class="heading">{{ $categoria->name }}</h1>

            <div class="plants_list">

                @foreach ($plants as $plant)
                    <div class="plant_box">
                        <div class="plant_img">
                            <img src="/img/products/{{ $plant->foto }}">
                        </div>
                        <div class="info_plant">
                            <h2>{{ $plant->name }}</h2>
                            <h3>{{ $plant->categoria->name_small }}</h3>
                            <p>{{ $plant->extract }}</p>
                            <a href="{{ route('show', $plant) }}">comprar</a>
                        </div>
                    </div>
                @endforeach

                <div class="paginate">
                    {{ $plants->links() }}
                </div>

            </div>
        </section>
    </div>
</x-app-layout>

<style>
    .pading {
        padding-top: 20px !important;
    }

    .paginate {
        width: 100% !important;
        padding: 20px;
    }
</style>
