@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Creando Habitaciones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Gestión</li>
                        <li class="breadcrumb-item "><a href="{{route('bedroom.index')}}">Habitaciones</a></li>
                        <li class="breadcrumb-item active">Crear</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-15">
                            @include('includes.message')
                            @include('includes.advertencia')
                            <div class="card">
                                <div class="card-header">
                                    <label for="" class="card-title">INGRESAR DATOS DE HABITACIONES</label>
                                </div>
                                <div class="card-body">
                                <form action="{{route('bedroom.store')}}" method="POST" >
                                    @csrf
                                    <div class="form-group row">
                                        <label for="nro" class="col-md-4 col-form-label text-md-right">{{ __('Numero') }}</label>
                                        <div class="col-md-6">
                                            <input id="nro" type="number" class="form-control @error('nro') is-invalid @enderror" name="nro" value="{{ old('nro') }}" required autocomplete="nro" autofocus>
                                            @error('nro')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nro_beds" class="col-md-4 col-form-label text-md-right">{{ __('Numero Cuarto') }}</label>
                                        <div class="col-md-6">
                                            <input id="nro_beds" type="number" class="form-control @error('nro_beds') is-invalid @enderror" name="nro_beds" value="{{ old('nro_beds') }}" required autocomplete="nro_beds" autofocus>
                                            @error('nro_beds')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="size_beds" class="col-md-4 col-form-label text-md-right">{{ __('Tamaño Cama') }}</label>
                                        <div class="col-md-6">
                                        <select name="size_beds" id="size_beds" class="form-control @error('size_beds') is-invalid @enderror">                  
                                            @foreach ($size_beds as $recorrido)
                                                <option value="{{$recorrido}}">
                                                    {{$recorrido}}
                                                </option>
                                            @endforeach
                                        </select>
                                            @error('size_beds')  
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <label for="floor" class="col-md-4 col-form-label text-md-right">{{ __('Numero de Piso') }}</label>
                                        <div class="col-md-6">
                                            <input id="floor" type="number" class="form-control @error('floor') is-invalid @enderror" name="floor" value="{{ old('floor') }}" required autocomplete="floor" autofocus>
                                            @error('floor')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="is_bath" class="col-md-4 col-form-label text-md-right">{{ __('Tiene Baño?') }}</label>
                                        <div class="col-md-6">
                                            <input id="is_bath" type="number" class="form-control @error('is_bath') is-invalid @enderror" name="is_bath" value="{{ old('is_bath') }}" required autocomplete="is_bath" autofocus>
                                            @error('is_bath')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Precio') }}</label>
                                        <div class="col-md-6">
                                            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>
                                            @error('price')
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary" style="width:60%;">
                                                <i class="fas fa-paper-plane"></i>
                                                {{ __('Crear') }}
                                            </button>
                                        </div>
                                    </div>                                   
                                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
</div>
@endsection