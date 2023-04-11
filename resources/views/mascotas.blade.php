@extends('layouts.master')
@section('titulo','CRUD MASCOTAS')
@section('contenido')
    <h1>HOLA MUNDO</h1>
    <!-- INICIA VUE -->
    <div id="mascota">
        <h1>@{{ prueba }}</h1>
    </div>
    <!-- TERMINA VUE -->

@endsection

@push('scripts')
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="js/apis/apiMascota.js"></script>
@endpush
