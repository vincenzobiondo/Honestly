<x-layout>
    <x-navbar/>
    <div class="container-fluid text-white">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 text-center d-flex justify-content-center align-items-center mb-5">
                <h1 class="text-secondary">Questi sono i nostri annunci</h1>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-center">
            @foreach ($announcements as $annuncio)
            <div class="col-12 col-md-2 text-center d-flex justify-content-center">
                <x-card
                item="{{$annuncio->item}}" 
                price="{{$annuncio->price}}"
                brand_name="{{$annuncio->brand_name}}"
                measurements="{{$annuncio->measurements}}"
                img="{{Storage::url($annuncio->img)}}"  {{-- con la classe storage e il metodo url modifichiamo dinamicamente il percorso delle immagini che abbiamo salvato nel nostro database--}}
                id="{{$annuncio->id}}"
                />
            </div>
            @endforeach
        </div>
    </div>

   
</x-layout>