@extends('layouts.app')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Creando Usuario</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Gestión</li>
                        <li class="breadcrumb-item "><a href="{{route('user.index')}}">Usuarios</a></li>
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
                            <div class="card card-primary">
                                @if(empty(Session::get('person')) && !$errors->any() )
                                @include('user.create.paso_one')
                                @endif

                                @if(!empty(Session::get('person')) || $errors->any() )
                                @include('user.create.paso_two')
                                @endif
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