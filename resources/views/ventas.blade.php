@extends('layouts.master')
@section('titulo','Interface de ventas')
@section('contenido')

<div id="apiVentas">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <input type="text" placeholder="Escriba el código del producto"
                class="form-control">
                <button class="btn-primary">Buscar</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="js/apis/apiVenta.js"></script>
@endpush


