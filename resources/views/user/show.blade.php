@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Usuarios</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Gestión</li>
                        <li class="breadcrumb-item"><a href="{{route('user.index')}}">Usuarios</a></li>
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
                                    Mostrando Usuario {{$user->id }}
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">

                                    <table>

                                        <tbody>
                                            <tr>
                                                <td class="text-md-right">{{ __('Documento:') }}</td>
                                                <td class="text-md-center">{{ $user->person->dni }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Nombre:') }}</td>
                                                <td class="text-md-center">{{ $user->person->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Apellido:') }}</td>
                                                <td class="text-md-center">{{ $user->person->surname }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Usuario:') }}</td>
                                                <td class="text-md-center">{{ $user->username }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Rol:') }}</td>
                                                <td class="text-md-center">{{ $user->role->name }}</td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Estado:') }}</td>
                                                <td>
                                                    @if($user->is_enabled)
                                                    <button type="button" class="btn btn-sm btn-block btn-success disabled">Activo</button>
                                                    @else
                                                    <button type="button" class="btn btn-sm btn-block btn-default disabled">Inactivo</button>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-md-right">{{ __('Correo:') }}</td>
                                                <td class="text-md-center">{{ $user->email }}</td>
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