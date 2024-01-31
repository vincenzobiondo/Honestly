<x-layout>
  <x-navbar/>
  <div class="container-fluid mb-5 text-secondary">
    <div class="row justify-content-center w-100 h-100">
      <div class="col-12 text-center d-flex justify-content-center align-items-center">
        <h1>Qui puoi inserire i tuoi annunci</h1>
      </div>
    </div>
  </div>
  @if (session('message'))
  <div class="alert alert-success">
    {{ session('message') }}
  </div>
  @endif
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6">
        @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif
        
        <form action="{{route('announcements.store')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="mb-3">
            <label for="item"class="form-label text-secondary">Item</label>
            <input value="{{old('item')}}" type="text" name="item" class="form-control" id="item">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label text-secondary">Price</label>
            <input value="{{old('price')}}" type="number" name="price" class="form-control" id="price">
          </div>
          <div class="mb-3">
            <label for="brand_name" class="form-label text-secondary">Brand name</label>
            <input value="{{old('brand_name')}}" type="text" name="brand_name"class="form-control" id="brand_name">
          </div>
          <div class="mb-3">
            <label for="measurements" class="form-label text-secondary">Measurements</label>
            <input value="{{old('measurements')}}" type="name" name="measurements"class="form-control" id="measurements">
          </div>
          <div class="mb-3">
            <label for="img" class="form-label text-secondary">Inserisci un'immagine</label>
            <input type="file" name="img"class="form-control" id="img">
          </div>
          <div class="justify-content-center d-flex">
            <button type="submit" class="btn btn-secondary">Inserisci annuncio</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</x-layout>