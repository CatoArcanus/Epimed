@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Product Build Form
@stop

@section ('content')
	<div class="bg-grey-warm text-primary">
		<div id="form_title" class="text-center">
			<h4>PRODUCT BUILD FORM</h4>
		</div>
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-3034</h4>
		</div>
	</div>
	<hr>
	<div>
		
		{{ Form::open(array ('route' => 'store_product_build_form', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}	
		
			<div class="form-group">
				{{ Form::label('catalog_#', 'Catalog #:', 	array('class' => 'col-sm-2 control-label form-inline text-primary')) }}
				<div class="col-sm-2">
					{{ Form::text('catalog_#', 	'',			array('class' => 'form-control form-inline')) }}
				</div>

				{{ Form::label('quantity', 'Quantity:', 	array('class' => 'col-sm-2 control-label form-inline text-primary')) }}
				<div class="col-sm-1">
					{{ Form::text('quantity', 	'',			array('class' => 'form-control form-inline')) }}
				</div>
			</div>
			<hr>
			<div class="form-actions">
				{{ Form::submit('Submit', array('class' => 'btn btn-success btn-submit col-sm-offset-10')) }}
			</div>			

			{{ Form::close (); }}
	</div>
 
@stop