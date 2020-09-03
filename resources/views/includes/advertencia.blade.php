@if(session('advertencia'))
@foreach(session('advertencia') as $advertir)
<div class="alert alert-warning alert-dismissible">
	<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
	<h5><i class="icon fas fa-exclamation-triangle"></i> Alert!</h5>
	{{$advertir}}
</div>
@endforeach
@endif