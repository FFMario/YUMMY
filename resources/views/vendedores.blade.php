@extends('plantilla')
@section('navbar')
<section>

<div class="contenedor-tarjetas">
        <a href="pagina1.html" class="tarjeta">
            <div class="circulo">
                <img src="usuario.jpg" alt="Imagen" class="imagen">
            </div>
            <div class="descripcion">
                <p>Vendedor 1</p>
            </div>
        </a>

        <a href="pagina2.html" class="tarjeta">
            <div class="circulo">
                <img src="usuario.jpg" alt="Imagen" class="imagen">
            </div>
            <div class="descripcion">
                <p>Vendedor 2</p>
            </div>
        </a>
    </div>

    <div class="contenedor-tarjetas">
        <a href="pagina3.html" class="tarjeta">
            <div class="circulo">
                <img src="usuario.jpg" alt="Imagen" class="imagen">
            </div>
            <div class="descripcion">
                <p>Vendedor 3</p>
            </div>
        </a>

        <a href="pagina4.html" class="tarjeta">
            <div class="circulo">
                <img src="usuario.jpg" alt="Imagen" class="imagen">
            </div>
            <div class="descripcion">
                <p>Vendedor 4</p>
            </div>
        </a>
    </div>
</section>
@endsection