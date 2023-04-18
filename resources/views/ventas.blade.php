@extends('layouts.master')
@section('titulo','Interface de productos')
@section('contenido')

<div id="apiVentas">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Código del producto" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                  </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script type="text/javascript" src="js/vue-resource.js"></script>
<script type="text/javascript" src="js/apis/apiVenta.js"></script>
@endpush


