
<div class="container">
  <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
    <img src="/media/11.jpg" alt="" class="img-fluid box">
    <h1 class="display-4 fw-normal text-white overlay-text">The easiest way to buy and sell second-hand furniture</h1>
    <a class="nav-link mx-2 text-secondary overlay-sx bg-warning" href="{{route('announcements.index')}}">buy</a>
    <a class="nav-link mx-2 text-secondary overlay-dx bg-warning" href="{{route('announcements.create')}}">sell</a>
    <main>
      {{-- prima card --}}
      <div class="row  row-cols-md-4 mt-5 text-center box">
        <div class="col">
          <div class="card mb-4 text-white">
            <div class="">
              <h4 class="my-3">BUYERS GUIDE</h4>
            </div>
            <div class="card-body">              
              <ul class="list-unstyled mt-3 mb-4">
                <h1 class="text-white">Enjoy shopping <br>treasures - safely</h1>
              </ul>
              <a href="{{$url}}" class="btn acust text-white">Read more -></a>
            </div>
          </div>
        </div>
        {{-- seconda card --}}
        <div class="col">
          <div class="card2 mb-4 text-white">
            <div class="card-header py-3">
              <h4 class="my-3 ">SELLERS GUIDE</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title text-white">Listin pre-<br>owned gems is <br> free</h1>
              <a href="{{$url}}" class="btn text-white acust">Read more -></a>
            </div>
          </div>
        </div>
        {{-- terza card --}}
        <div class="col">
          <div class="card3 mb-4 text-white">
            <div class="card-header py-3 ">
              <h4 class="my-3">HONESTLY</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title text-white">We celebrate <br> high-quality <br>design</h1>
              <a href="{{$url}}" class="btn btn-lg text-white acust">Read more -></a>
            </div>
          </div>
        </div>
        {{-- quarta card --}}
        <div class="col">
          <div class="card4 mb-4 text-white">
            <div class="card-header py-3 ">
              <h4 class="my-3">NEED HELP?</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title text-white">Honestly - how<br>does it  work!</h1>
              <a href="{{$url}}" class="btn text-white acust">Read more -></a>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <img src="" alt="" class="img-fluid">
  </main>
</div>



