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
                        <li class="breadcrumb-item active">Habitaciones</li>
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
                                    <form action="{{route('bedroom.create')}}" method="get">
                                        <button type="submit" class="btn btn-block btn-success " style="width:15%;">
                                            <i class="fas fa-user-plus"></i>
                                            ADD
                                        </button>
                                    </form>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th style="width: 10px">#</th>
                                                <th>Nro cuarto</th>
                                                <th>Cantidad de Cuartos</th>
                                                <th>Tamaño Cama</th>
                                                <th>Piso</th>
                                                <th style="width: 40px">Tiene baño?</th>
                                                <th>Precio</th>
                                                <th>&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bedrooms as $bedroom)
                                            <tr>
                                                <td>{{$bedroom->id}}</td>
                                                <td>{{$bedroom->nro}}</td>
                                                <td>{{$bedroom->nro_beds}}</td>
                                                <td>{{$bedroom->size_beds}}</td>
                                                <td>{{$bedroom->floor}}</td>
                                                <td>{{$bedroom->is_bath}}</td>
                                                <td>{{$bedroom->price}}</td>
                                                
                                                
                                                <td>
                                                    <form action="{{route('bedroom.show',$bedroom->id)}}" method="get">
                                                        @csrf
                                                        <button type="submit" class="btn btn-block btn-info ">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                                <td>
                                                    <form action="{{route('bedroom.destroy',$bedroom)}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-block btn-danger" onclick="return confirm('Estas seguro que desea eliminar?')">
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer clearfix">
                                    <ul class="pagination pagination-sm m-0 float-right">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
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