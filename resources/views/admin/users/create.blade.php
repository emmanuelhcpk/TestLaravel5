@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios registrados</div>

				<div class="panel-body">
					{!!	Form::open(['route'=>'admin.users.store','method'=>'POST'])!!}

					<div class="form-group">
						<label>First Name </label>
						{!!Form::text('first_name',null,['class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<label>Last Name</label>
						{!!Form::text('last_name',null,['class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<label> Email</label>
						{!!Form::email('email',null,['class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<label> Tipo de usuario</label>
						{!! Form::select('type', [''=>'Seleccionar Campo','user' => 'Usuario' , 'admin' => 'Administrador'],null, ['class'=>'form-control']) !!}
					</div>
 					<div class="form-group">
						<label>Password</label>
						{!!Form::password('password',['class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<label>Password confirmation</label>
						{!!Form::password('password_confirmation',['class'=>'form-control'])!!}
					</div>
					<div class="form-group">
						<button type="submit">enviar</button>
					</div>
					{!!	Form::close()!!}

				</div>
			</div>
		</div>
	</div>
</div>

@endsection