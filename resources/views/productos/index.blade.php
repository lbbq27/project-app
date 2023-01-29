@extends('layout')
@section('title', 'Todo los Productos')

@section('contenido')
<div class="col-12  mx-auto my-5">
    <h1>
        Productos
    </h1>
    <h2>{{$titulo}}</h2>
    <a href="{{route('productos.create')}}" class="btn btn-primary mb-4">Create</a>
    <div class="row">
        @foreach ($productos as $producto)
        <div class="col col-md-3 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$producto->nombre}}</h5>
                    <p class="card-text">{{$producto->descripcion}}</p>
                    <h3 class="card-title">{{"$ " .$producto->precio}}</h3>
                </div>
                <div class="card-footer d-flex justify-content-around">
                    <a href="#" class="btn btn-secondary">Editar</a>
                    <form action="">
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    
</div>
@endsection