<x-layout>
<x-navbar/>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 text-center d-flex justify-content-center align-items-center mb-5">
                <h1>Ecco qui il dettaglio dell'annuncio : {{$announcements->item}}</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center d-flex justify-content-center align-items-center mb-5">
                <h1>Il prezzo dell'articolo  é: {{$announcements->price}} euro</h1>
                
            </div>
        </div>
    </div>
<x-footer/>
</x-layout>