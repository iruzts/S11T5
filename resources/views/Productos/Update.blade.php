@extends('adminlte::page')

@section('title', 'Clientes')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
<div class="card card-primary">
    <div class="card-header">
        <h1 class="card-title">Editar Producto</h1>
    </div>
    <br>
    <form method="post" action="{{route('Productos.update', $Productos->id)}}">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Nombre Producto:</label>
                    <input type="text" class="form-control" name="nombre" value="{{$Productos->nombre}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Descripcion:</label>
                    <textarea type="text" class="form-control" rows="3" name="descripcion" > {{$Productos->descripcion}} </textarea>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Precio de costo</label>
                    <input type="number" class="form-control" name="precio" value="{{$Productos->precio}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Precio de Venta</label>
                    <input type="number" class="form-control" name="costo" value="{{$Productos->costo}}" >
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <label for="txtNombre" class="visually-hidden">Cantidad en Existencia</label>
                    <input type="number" class="form-control" name="existencia" value="{{$Productos->existencia}}">
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col col-lg-2">
                </div>
                <div class="col col-lg-8">
                    <button type="submit" class="btn btn-outline-success btn-block">Guardar</button>
                </div>
                <div class="col col-lg-2">
                </div>
            </div>
        </div>
    </form>
</div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop