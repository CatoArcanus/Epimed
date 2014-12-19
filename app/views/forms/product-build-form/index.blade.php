@extends('layouts.masterLayout')

@section('pagetitle')
	Epimed - Product Build Form
@stop

@section('content')
	<div class="bg-grey-warm text-primary">		
		<div id="form_title" class="text-center">
			<h4>PRODUCT BUILD FORMS</h4>
		</div>		
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-3034</h4>
		</div>		
	</div>
	<hr>
	<div>
		<p class="pull-right">
			<a href="{{route('start_product_build_form')}}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Start New Product Build Form</a>
		<p>	
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Final Product</th>
					<th>Catalog #</th>
					<th>Quantity</th>
					<th>% Complete</th>
					<th>---</th>					
				</tr>
			</thead>
			<tbody>
				@foreach ($pbfs as $pbf)
					<?php $bom = $pbf->billOfMaterials; ?>
					<?php $product = $bom->product; ?>
					<tr>
						<td>
							{{ $product->name }} 
						</td>
						<td>
							{{ $product->alphanumeric }}
						</td>
						<td>
							{{ $pbf->quantity }}
						</td>
						<td>

						</td>
						<td>
							<a class="btn btn-primary" href="{{ route('show_product_build_form', $pbf->id) }}"><i class="fa fa-eye"></i> View</a>
							<a class="btn btn-warning" href="{{ route('edit_product_build_form', array('id' => $pbf->id, 'stage' => 'annex')) }}"><i class="fa fa-pencil"></i> Add Component</a>
							<a class="btn btn-success" href="{{ route('update_product_build_form', $pbf->id, 'approve') }}"><i class="fa fa-check"></i> Approve</a>
						</td>
					</tr>
				@endforeach
			</tbody>
		</table>		
	</div> 
@stop