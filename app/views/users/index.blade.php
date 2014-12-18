@extends ('layouts.masterLayout')

@section ('header')
	@parent
	<h2>Profile Page</h2>
@stop

@section ('content')
	<div class="">	
		<h3>Users</h3>						
	</div>
	<hr>
	<div>
		<p class="pull-right">
			<a href="{{route('create_user')}}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Create User</a>
		<p>	
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>User Name</th>					
					<th>---</th>					
				</tr>
			</thead>
			<tbody>
				@foreach ($users as $user)
					<tr>
						<td>						
							{{ $user->username }}
						</td>
						
						<td>
							<a class="btn btn-primary" href="{{ route('show_user', $user->id) }}"><i class="fa fa-book"></i> View User </a>
							<a class="btn btn-info" href="{{ route('show_user', $user->id) }}"><i class="fa fa-pencil-square-o"></i> edit </a>
							<a class="btn btn-danger pull-right" href="{{ route('show_user', $user->id) }}"><i class="fa fa-times-circle"></i> delete</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>		
	</div> 
@stop