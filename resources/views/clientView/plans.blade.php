<x-layouts.app title="planes">
  
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
      <symbol id="check2" viewBox="0 0 16 16">
        <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
      </symbol>
      <symbol id="circle-half" viewBox="0 0 16 16">
        <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z"/>
      </symbol>
      <symbol id="moon-stars-fill" viewBox="0 0 16 16">
        <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"/>
        <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z"/>
      </symbol>
      <symbol id="sun-fill" viewBox="0 0 16 16">
        <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
      </symbol>
    </svg>

    {{-- <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
      <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center"
              id="bd-theme"
              type="button"
              aria-expanded="false"
              data-bs-toggle="dropdown"
              aria-label="Toggle theme (auto)">
        <svg class="bi my-1 theme-icon-active" width="1em" height="1em"><use href="#circle-half"></use></svg>
        <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
      </button>
      <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#sun-fill"></use></svg>
            Claro
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#moon-stars-fill"></use></svg>
            Oscuro
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
        <li>
          <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
            <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em"><use href="#circle-half"></use></svg>
            Auto
            <svg class="bi ms-auto d-none" width="1em" height="1em"><use href="#check2"></use></svg>
          </button>
        </li>
      </ul>
    </div> --}}

    
<svg xmlns="http://www.w3.org/2000/svg" class="d-none">
  <symbol id="check" viewBox="0 0 16 16">
    <title>Check</title>
    <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
  </symbol>
</svg>

<div class="container py-2">
  <header>
    <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
      <a href="" class="d-flex align-items-center link-body-emphasis text-decoration-none">
        <img src = "{{ asset('img/logo.png') }}" alt="logo"> 
      </a>

      <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('products.index')}}">Inicio</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('index.gallery')}}">Galeria</a>
        <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('index.plans')}}">Paquetes</a>
        <a class="py-2 link-body-emphasis text-decoration-none" href="{{route('auth.logout')}}">Cerrar Sesion</a>
      </nav>
    </div>

    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
      <h1 class="display-4 fw-normal text-body-emphasis">Paquetes de Hospedaje</h1>
      <p class="fs-5 text-body-secondary">Encuentra el paquete según tus necesidades </p>
    </div>
  </header>

  <main>
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Estudiantes</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title"><small class="text-body-secondary fw-light">Contacta para info</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Habitación privada</li>
              <li>Amueblada</li>
              <li>200 MB internet</li>
              <li>Áreas Comunes</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Más información</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Turista</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$420<small class="text-body-secondary fw-light">/noche</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Habitación privada con TV</li>
              <li>Internet de alta velocidad</li>
              <li>Desayuno fines de semana </li>
              <li>Guía personalizada de lugares</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Me interesa</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-bg-primary border-primary">
            <h4 class="my-0 fw-normal">Ejecutivos</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$380<small class="text-body-secondary fw-light">/noche</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>Habitación privada con escritorio</li>
              <li>Internet de Alta Velocidad</li>
              <li>Sala de Juntas</li>
              <li>Coffee Break</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">¡La quiero!</button>
          </div>
        </div>
      </div>
    </div>

    

  <footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
      <div class="col-12 col-md">
        <img class="mb-2" src="{{ asset('img/logo.png') }}" alt="logo" width="24" height="19">
        <small class="d-block mb-3 text-body-secondary">&copy; RubikCode 2024</small>
      </div>
      <div class="col-6 col-md">
        <h5>Sigue Navegando</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Inicio</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Galeria</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Paquetes</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Contacto</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Redes Sociales</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Instagram</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Facebook</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Airbnb</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">TripAdvisor</a></li>
        </ul>
      </div>
      <div class="col-6 col-md">
        <h5>Nosotros</h5>
        <ul class="list-unstyled text-small">
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Historia</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Ubicación</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Equipo</a></li>
          <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Servicios Adicionales</a></li>
        </ul>
      </div>  
    </div>
  </footer>
</div>


</x-layouts.app>