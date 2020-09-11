@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Habitaciones</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Gestión</li>
                        <li class="breadcrumb-item"><a href="{{route('bedroom.index')}}">Habitaciones</a></li>
                        <li class="breadcrumb-item active">Mostrando</li>
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
                    <div class="row justify-content-center ">
                        <div class="col-md-15">
                            @include('includes.message')
                            @include('includes.advertencia')
                            <div class="card">
                                <div class="card-header">
                                    Mostrando Habitacion {{$bedroom->id }}
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table>

                                        <tbody>
                                            <tr>
                                                <td class="text-md-right">{{ __('Nro cuarto:') }}</td>
                                                <td class="text-md-center">{{ $bedroom->nro }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Cantidad Cama:') }}</td>
                                                <td class="text-md-center">{{ $bedroom->nro_beds }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Tamaño Cama:') }}</td>
                                                <td class="text-md-center">{{ $bedroom->size_beds }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Piso:') }}</td>
                                                <td class="text-md-center">{{ $bedroom->floor }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Tiene baño?:') }}</td>
                                                <td>
                                                    @if($bedroom->is_bath)
                                                    <button type="button" class="btn btn-sm btn-block btn-success disabled">SI</button>
                                                    @else
                                                    <button type="button" class="btn btn-sm btn-block btn-default disabled">NO</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Precio:') }}</td>
                                                <td class="text-md-center">{{ $bedroom->price }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection