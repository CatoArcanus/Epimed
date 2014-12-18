@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Batch History Form
@stop

@section ('content')
	<div class="bg-grey-warm text-primary">
		<div id="form_title" class="text-center">
			<h4>FINAL PRODUCT BATCH HISTORY RECORD</h4>
		</div>
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-013</h4>
		</div>
	</div>
	<hr>
	<div>
		
		{{ Form::open (array ('route' => 'store_batch_history', 'method' => 'post', 'class' => 'form-horizontal', 'role' => 'form')) }}	
		
			<div class="form-group">
				{{ Form::label('final_product', 'Final Product', 	array('class' => 'col-sm-2 control-label form-inline text-primary')) }}
				<div class="col-sm-4">
					{{ Form::text('final_product', 	'',				array('class' => 'form-control form-inline', 'readonly' => '')) }}
				</div>
				{{ Form::label('final_lot_#', 'Final Lot #:', 		array('class' => 'col-sm-2 control-label col-sm-offset-1 form-inline text-primary')) }}
				<div class="col-sm-2">
					{{ Form::text('final_lot_#', 	'',				array('class' => 'form-control form-inline')) }}
				</div>
			</div>
			
			<div class="form-group">
				{{ Form::label('catalog_#', 'Catalog #', 			array('class' => 'col-sm-2 control-label form-inline text-primary')) }}
				<div class="col-sm-4">
					{{ Form::text('catalog_#', 	'',					array('class' => 'form-control form-inline')) }}
				</div>
				{{ Form::label('final_quantity', 'Final Quantity',	array('class' => 'col-sm-2 control-label col-sm-offset-1 form-inline text-primary')) }}
				<div class="col-sm-2">
					{{ Form::text('final_quantity', 	'',			array('class' => 'form-control form-inline', 'readonly' => '')) }}
				</div>
			</div>		
			
			<div class="form-actions">
				{{ Form::submit('Submit Batch History Start', array('class' => 'btn btn-success btn-submit col-sm-offset-8')) }}
			</div>
			{{--
			<br>
			<div class="form-actions">
				{{ Form::submit('Submit Batch History And Continue with Generation', array('class' => 'btn btn-info btn-submit col-sm-offset-8')) }}
			</div>
			--}}			

			{{ Form::close (); }}		
	</div>
 
@stop