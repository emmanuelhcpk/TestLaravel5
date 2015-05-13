@extends('app')

@section('content')
<div class="col-md-8 well">
	<br>
	@if(isset($user))
		<h2>{{$hola.' '.$user}}</h2>
	@else
		<h3>nada</h3>
	@endif
	<br>
	</div>
@stop