@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Usuarios registrados</div>

				<div class="panel-body">
					<h4>{{'El usuario en sesion es :  '.Auth::user()->full_name()}}</h4>
					<ul>
					@foreach ($user as $us)
						@if($us->type!='admin')
							<li>{{ $us->full_name()	}}</li>
						@endif
					@endforeach	
					</ul>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
