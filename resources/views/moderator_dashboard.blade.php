@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Moderator Dashboard</div>

					<div class="panel-body">
					@foreach($submissions as $submission)
						@if($submission->role != 'Moderator')
						<div class="panel panel-default">
							<div class="panel-heading">Submitted By: {{$submission->email}}</div>
								<div class="panel-body">
								
								<div class="panel-body">
								@foreach($submission->codes as $code)
								<div class="panel panel-default">
								<div class="panel-heading">Code Submitted At: {{$submission->created_at}}</div>
									{{$code->code}}
									</div>
								@endforeach
								</div>
									
								</div>
							</div>
						@endif
					@endforeach	
				</div>
			</div>
		</div>
	</div>
</div>
@endsection		