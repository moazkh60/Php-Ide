@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">User Dashboard</div>

				<div class="panel-body">
					<form class="form-horizontal" role="form" method="POST" action="/output">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<textarea name="myCode" rows="20" cols="127" placeholder="Write Your PHP CODE HERE with PHP TAGS"></textarea> 
						</br><button type="submit" class="btn btn-primary">
									Execute Code
								</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
