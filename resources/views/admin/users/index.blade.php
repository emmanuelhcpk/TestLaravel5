@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios registrados</div>

				<div class="panel-body">
					<p>
						<a class="btn btn-info" href="{{ route('admin.users.create') }}">Crear usuario</a>
					</p>
				<table class="table">
					<tr>
						<th>#</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Acciones</th>
					</tr>
					@foreach ($users as $us)
					<tr>	
						<td>{{ $us->id}}</td>
						<td>{{ $us->full_name()}}</td>
						<td>{{ $us->email}}</td>
						<td>{{ $us->type}}</td>
					</tr>

					@endforeach


				</table>
					{!!$users->render()!!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
