@extends ('layouts.masterLayout')

@section ('pagetitle')
	Epimed - Batch History Form
@stop

@section ('content')
	<div class="bg-grey-warm text-primary">		
		<div id="form_title" class="text-center">
			<h4>FINAL PRODUCT BATCH HISTORY RECORDS</h4>
		</div>		
	
		<div id="form_subtitle" class="text-center">
			<h6>IHR-013</h4>
		</div>		
	</div>
	<hr>
	<div>
		<p class="pull-right">
			<a href="{{route('start_batch_history')}}" class="btn btn-warning"><i class="fa fa-plus-circle"></i> Start New Batch History</a>
		<p>	
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Final Product</th>
					<th>lot #</th>
					<th>% complete</th>
					<th>---</th>					
				</tr>
			</thead>
			<tbody>
				@foreach ($batches as $batch)
					<tr>
						<td>
							{{ $batch->product->name }} 
						</td>
						<td>
							{{ $batch->lot }}
						</td>
						<td>
							<div class="progress">
								<?php 
									$batchNum = $batch->getNum(); 
									if($batchNum < 60) {
										$progressBarClass = 'progress-bar-warning';
									} else if ($batchNum < 90) {
										$progressBarClass = 'progress-bar-info';
									} else {
										$progressBarClass = 'progress-bar-success';
									}
								?>
								<div class="progress-bar {{$progressBarClass}}" role="progressbar" aria-valuenow="{{$batchNum}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$batchNum}}%; min-width:100px;">
									Next: {{$batch->getVerb()}}
								</div>
							</div>
						</td>
						<td>
							<a class="btn btn-primary" href="{{ route('show_batch_history', $batch->id) }}"><i class="fa fa-book"></i> View Batch </a>
							<a class="btn btn-info" href="{{ route('edit_batch_history', array('id' => $batch->id, 'stage' => $batch->getVerb())) }}"><i class="fa fa-pencil-square-o"></i> {{$batch->getVerb()}} </a>
							<a class="btn btn-danger pull-right" href="{{ route('show_batch_history', $batch->id) }}"><i class="fa fa-times-circle"></i> delete</a>
						</td>
					</tr>
				@endforeach
				<?php echo $batches->links(); ?>
			</tbody>
		</table>		
	</div> 
@stop