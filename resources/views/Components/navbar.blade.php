
{{-- navbar --}}
<nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand animate__animated animate__backInDown text-secondary" href="{{route('homepage')}}">honestly</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="posizione d-flex justify-content-end mx-2">
         
          <a class="nav-link mx-2 text-secondary" href="#">new arrivals</a>
          <a class="nav-link mx-2 text-secondary" href="#">Furniture</a>
          <a class="nav-link mx-2 text-secondary" href="{{route('contactUs')}}">Contact</a>
          <a class="nav-link mx-2 text-secondary" href="{{route('about')}}">about us</a>
        </div>
      </div>
    </div>
  </nav>
