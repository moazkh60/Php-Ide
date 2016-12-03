@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">CODE Output</div>

				<div class="panel-body">
					<?php include(('myCustomCode.php')); ?>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
