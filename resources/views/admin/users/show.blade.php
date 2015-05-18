@extends('app')


@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Perfil de Usuario</div>
				<div class="panel-body">
					<p>
						<h3>Nombre: {{$user->first_name}}</h3>
						<h3>Apellido: {{$user->last_name}}</h3>
						<h3>Email: {{$user->email}}</h3>
					</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection