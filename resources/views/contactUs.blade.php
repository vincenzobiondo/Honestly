<x-layout>
    <x-navbar/>
    <div class="container-fluid mb-5">
        <div class="row">
            <div class="col-12 col-md-6 text-center mb-5">
                <h1 class="text-secondary">Lascia il tuo messaggio qui:</h1>
            </div>
        </div>
    </div>

  <div class="container">
    <div class="row">
        <div class="col-12 col-md-6">
            <form action="{{route('submit')}}" method="POST">
                
                @csrf {{--sto chiedendo a Blade(laravel) di inserire per me un token di riconoscimento --}}
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label text-secondary">Email</label>
                  <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                  
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label text-secondary">Nome</label>
                    <input type="text" name="username" class="form-control" id="text">
                    
                  </div>
                <div class="mb-3">
                    <div class="form-floating">
                        <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{old('description')}}</textarea>
                        <label for="floatingTextarea2">Descrizione messaggio</label>
                      </div>
                </div>
                
                <button type="submit" class="btn btn-secondary">Submit</button>
              </form>
        </div>
    </div>
  </div>
<x-footer/>
</x-layout>