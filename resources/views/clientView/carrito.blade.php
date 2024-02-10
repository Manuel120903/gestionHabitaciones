<x-layouts.app>
  <div class="container py-2">
    <header>
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
        <a href="" class="d-flex align-items-center link-body-emphasis text-decoration-none">
          <img src = "{{ asset('img/logo.png') }}" alt="logo">
        </a>

        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('products.index') }}">Inicio</a>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('index.gallery') }}">Galeria</a>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('index.plans') }}">Paquetes</a>
          <a class="me-3 py-2 link-body-emphasis text-decoration-none" href="{{ route('cart') }}">Carrito</a>
          <a class="py-2 link-body-emphasis text-decoration-none" href="{{ route('auth.logout') }}">Cerrar Sesion</a>
        </nav>
      </div>
      @if (session('cart'))
        @foreach (session('cart') as $id => $details)
          <div>
            <img src="{{ $details['image'] }}" width="100" height="100">
            <h3>{{ $details['name'] }}</h3>
              Cantidad
            <input type="number" name="quantity" value="1" min="1" max="10" style="margin-bottom: 10px;">
            <p>Precio: ${{ $details['price'] }}</p>
          </div>
        @endforeach
      @else
        <p>Tu carrito está vacío.</p>
      @endif
</x-layouts.app>
