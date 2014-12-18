@extends ('layouts.masterLayout')

@section ('header')
	@parent
	<h2>Profile Page</h2>
@stop

@section ('content')	
	<div>
		<h4>{{Auth::user()->username}}</h4>
	</div>							
@stop