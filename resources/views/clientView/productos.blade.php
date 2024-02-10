 <x-layouts.app>
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
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{route('cart')}}">Carrito</a>
          <a class="py-2 link-body-emphasis text-decoration-none" href="{{route('auth.logout')}}">Cerrar Sesion</a>
        </nav>
      </div>
  <div class="container mt-5">
    <h1 class="mb-4">Productos Cada Victoria</h1>
    <div class="row">
      @foreach ($products as $product)
      <div>
          <img src="{{ $product->image }}" width="100" height="100">
          <h2>{{ $product->title }}</h2>
          <p>${{ $product->price }}</p>
          <form action="{{ route('addToCart', $product->id) }}" method="GET">
              @csrf
              <input type="number" name="quantity" value="1" min="1" max="10" style="margin-bottom: 10px;">
              <button type="submit">Agregar al Carrito</button>
          </form>
      </div>
      @endforeach
    </div>
</div>

</x-layouts.app>