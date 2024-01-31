
<x-layout>

    <x-navbar/>

    <div class="container-fluid ">
        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-6 text-center">
                <h1 class="text-custom text-secondary"></h1>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-md-3">
                <img src="{{$articolo['img']}}" class="" width="250" height="200" alt="">
            </div>
            <div class="col-12 col-md-4">
                <h3 class="text-secondary">Item: <h3 class="text-secondary">{{$articolo['item']}}</h3></h3>
                <p class="text-secondary">Price: <h3 class="text-secondary">{{$articolo['price']}} €</h3></p>
                <p class="text-secondary">Brand Name: <h3 class="text-secondary">{{$articolo['brand_name']}}</h3></p>
                <p class="text-secondary">Measurements: <h3 class="text-secondary">{{$articolo['measurements']}}</h3></p>
                <img src="{{Storage::url($articoli->img)}}" alt="">
            </div>
        </div>
    </div>
    <x-footer/>

</x-layout>