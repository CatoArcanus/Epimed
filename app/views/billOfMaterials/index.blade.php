@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Batch History Form
@stop

@section ('content')
	<div class="bg-grey-warm text-primary">		
		<div id="form_title" class="text-center">
			<h2>Bill of Materials</h2>
		</div>		
					
		<br>
		
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Final Product</th>
					<th>catalog #</th>
					<th>---</th>					
				</tr>
			</thead>
			<tbody>
				@foreach ($billOfMaterials as $billOfMaterial)
					<tr>
						<td>
							{{ $billOfMaterial->product->name }} 
						</td>
						<td>
							{{ $billOfMaterial->product->alphanumeric }}
						</td>
						<td>
							<a class="btn btn-primary" href="{{ route('show_bill_of_materials', $billOfMaterial->product->alphanumeric) }}"><i class="fa fa-list"></i> View Bill of Materials </a>
						</td>
					</tr>
				@endforeach
				<?php echo $billOfMaterials->links(); ?>
			</tbody>
		</table>		
	</div> 
@stop