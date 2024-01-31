
    <div class="bg-warning" style="width: 18rem">
        <img src="{{$img}}" class="card-img-top custim" alt="...">
        <div class="card-body">
          {{-- <h5 class="card-title">{{$brand_name}}</h5> --}}
          <p class="card-text">The item is a: {{$item}}</p>
          <p class="card-text">price: {{$price}} euro</p>
          {{-- <p class="card-text">brand name is: {{$brand_name}} </p> --}}
          <p class="card-text">measurements are: {{$measurements}} cm</p>
          <a href="{{route('announcements.show',['announcement'=>$id])}}" class="btn btn-secondary">Dettaglio</a>
        </div>
      </div>
