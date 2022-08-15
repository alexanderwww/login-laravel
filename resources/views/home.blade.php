@include('template.header')

@if (session('success'))
<p class="alert alert-success">{{ session('success') }}</p>
@endif

<div class="div_caja"></div>
<div class="div_caja2"></div>

<h1>Home page</h1>
<p>LOGIN Y REGISTER EN LARAVEL9</p>

@auth
    {{-- 'user' es el doc model  --}}
    {{-- Mostramos el name y si el valor es null, Mostramos el username --}}
    <h1>Bienvenido {{Auth()->user()->name ?? Auth()->user()->username}}</h1>

    <h3 class="text-primary">Info solo disponible para Usuarios Registrados:</h3>
    <p style="width: 1000px">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, delectus asperiores, molestiae laborum, eveniet assumenda corrupti eos consequatur neque labore possimus dolore deleniti officiis perspiciatis eligendi rem quo. Facilis, voluptatibus.
        Maiores, minima temporibus voluptatibus magnam, ipsum asperiores aliquid ad hic ipsam recusandae commodi eaque, reprehenderit nihil? Quae vero facilis explicabo quo. Nam alias ipsum qui maxime ut tenetur aperiam a.
        Praesentium, minus optio? Ipsa exercitationem tempore non enim saepe repellat quam debitis animi, illum iste nobis assumenda accusantium obcaecati, omnis, vitae iure qui hic architecto neque porro quisquam. Laudantium, aliquam.
        Quia tempore ea corporis non minima voluptas nemo veniam illo blanditiis facere! Ratione, laborum, magni dicta modi ad iure recusandae possimus, cupiditate nihil temporibus earum fugit voluptatibus. Architecto, fuga voluptates!
    </p>        
@endauth

@guest
    <h3 class="text-danger">PARA VER EL CONTENIDO <a href="{{route('loginShow')}}">INICIA SESION</a></h3>
   
@endguest

@include('template.footer')