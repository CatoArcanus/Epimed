@extends('layouts.masterLayout')

@section('content')
	<p class="pull-right"><a href="{{ route('bill_of_materials') }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back to Bill of Materials</a></p>
	{{-- Determine the Product from the Routed Alphanumeric --}}
	<?php $product = Product::where('alphanumeric', '=', $alphanumeric)->first(); ?>

	@if(is_null($product))
		<span>Sorry, but the Product you were looking for does not exist!</span>
	@else
		{{-- Determine the Bill of Materials from the Product --}}
		<?php $bom = $product->billOfMaterialsWhereCreated; ?>

		@if(is_null($bom))
			<span>Sorry, but the Product you were looking for does not have a Bill of Materials!</span>
		@else
			{{-- Display Bill of Materials --}}
			<center>
			
				<div id="form_title" class="text-center">
					<h2>Bill of Materials</h2>
				</div>
			
				<div id="form_subtitle" class="text-center">
					<h4>{{ $product->description . ' ' . $product->name; }}</h4>
				</div>
							
				<br>

				<table class="table table-bordered">
					<tr>
						<th>Component</th>
						<th>Product #</th>
						<th># Per Pack</th>
					</tr>

					@foreach($bom->components as $bom_component)
						<?php $component = $bom_component->product; ?>
						<tr>
							<td> {{ $component->description . ' ' . $component->name }} </td>
							<td> {{ $component->alphanumeric }} </td>
							<td> {{ number_format($bom_component->quantity, 2, '.', ',') }} </td>
						</tr>
					@endforeach

				</table>
			</center>			
		@endif
	@endif
@stop