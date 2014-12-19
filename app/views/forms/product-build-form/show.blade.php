@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Product Build Form
@stop

@section ('content')
	<div class="row">
		<p class="pull-right">
			<a href="{{ route('index_product_build_form') }}" class="btn btn-success"><i class="fa fa-chevron-left"></i> Back to Product Build Forms</a>
		</p>
	</div>

	<div class="bg-grey-warm text-primary">		
		<div id="form_title" class="text-center">
			<h4>BILL OF MATERIALS - PRODUCT BUILD FORM</h4>
		</div>		
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-3034</h4>
		</div>		
	</div>

	<hr>

	<div>
		{{ Form::open (array ('route' => 'index_product_build_form', 'method' => 'get', 'class' => 'form-horizontal', 'role' => 'form')) }}
			<?php $bom = $pbf->billOfMaterials; ?>
			<?php $product = $bom->product; ?>

			{{-- Description & Catalog # --}}
			<div class="form-group">
				{{ Form::label('', 'Description', array('class' => 'col-sm-2 control-label form-inline text-primary')) }}
				<div class="col-sm-4">
					{{ Form::text('', $product->description . ' ' . $product->name,	array('class' => 'form-control form-inline', 'readonly' => 'true')) }}
				</div>
				{{ Form::label('', 'Catalog #:', array('class' => 'col-sm-2 control-label col-sm-offset-1 form-inline text-primary')) }}
				<div class="col-sm-2">
					{{ Form::text('', 	$product->alphanumeric,	array('class' => 'form-control form-inline', 'readonly' => 'true')) }}
				</div>				
			</div>

			{{-- Bill of Materials --}}
			<div class="form-group">
				<table class="table table-bordered">
					<tr>
						<th>Component</th>
						<th>Product #</th>
						<th># Per Pack</th>
						<th>Component Lot #(s)</th>
					</tr>

					@foreach($bom->components as $bom_component)
						<?php $component = $bom_component->product; ?>
						<tr>
							<td> {{ $component->description . ' ' . $component->name }} </td>
							<td> {{ $component->alphanumeric }} </td>
							<td> {{ number_format($bom_component->quantity, 2, '.', ',') }} </td>
							<td>
								@foreach($component->batches as $batch)
									{{ Form::text('', $batch->lot, array('class' => 'form-control form-inline', 'readonly' => 'true')) }}
								@endforeach
							</td>
						</tr>
					@endforeach

				</table>
			</div>
			
			{{-- Comments --}}
			<div id="comments" class="text-primary text-center">
				<h4>Comments</h4>
			</div>

			<div>
				<?php $comments_text = ""; ?>
				<?php $comments = @$pbf->commentBlock->comments or $comments = array();?>	
				@foreach($comments as $comment)
					<?php $comments_text = $comments_text.$comment->text.'\n'; ?>
				@endforeach
				{{ Form::textarea('comments', $comments_text, array('class' => 'form-control form-inline', 'readonly' => 'true')) }}
			</div>
			
			<hr>
			<br>
			{{ Form::close (); }}
	</div>
@stop