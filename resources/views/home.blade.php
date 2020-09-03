@extends('layouts.app')

@section('content')
@guest
<div class="wrapper">
@else
<div class="content-wrapper">
@endguest
    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8" style="padding-top: 15px;">
                            <div class="card">
                                <div class="card-header">{{ __('Dashboard') }}</div>
                                <div class="card-body">
                                    {{ __('Estas en el home!') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>

@endsection