
<div class="card-header">
    <h3 class="card-title">INGRESE DATOS PERSONALES</h3>
</div>
<!-- /.card-header -->
<!-- form start -->
<form action="{{ route('person.verificar') }}" method="POST">
    @csrf
    <div class="card-body">
        <div class="form-group">
            <label for="dni">Documento de Identidad</label>
            <input type="number" class="form-control" id="dni" name="dni">
        </div>

        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="name">
        </div>

        <div class="form-group">
            <label for="surname">Apellido</label>
            <input type="text" class="form-control" id="surname" name="surname">
        </div>
    </div>
    <!-- /.card-body -->

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Siguiente</button>
    </div>
</form>