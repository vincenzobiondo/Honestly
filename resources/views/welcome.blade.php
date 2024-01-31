<x-layout>

    <x-navbar>

    </x-navbar>

@foreach ($articoli as $articolo)
    <x-plain 
        url="{{route('articoli.show',
        ['articoloId' => $articolo['id']])}}"
    />

    
@endforeach
    {{-- <x-card
    song_title="{{$articolo['song_title']}}"
    /> --}}

  
    <x-footer>
        
    </x-footer>
</x-layout>