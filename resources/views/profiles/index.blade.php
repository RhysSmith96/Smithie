@extends('layouts.app')

@section('title', 'Profiles')

@section('content')

		


		<h1 align="Center">The Profiles of SmithiGram</h1>
		<br>
		<br>
		<div class="row">
		<div class="col-md-10">
			<h1>All Profiles</h1>
		</div>

		
	</div> <!-- end of .row -->
	
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Title</th>
					<th>Created At</th>
					<th></th>
				</thead>

				<tbody>
					
					@foreach ($profiles as $profile)
						
						<tr>
							<th>{{ $profile->id }}</th>
							<td><a href="/profiles/{{$profile->id}}">{{$profile->name}}</a></td>
							<td>{{ date('M j, Y', strtotime($profile->created_at)) }}</td>
							
						</tr>

					@endforeach

				</tbody>
			</table>

			<div class="text-center">
				{!!$profiles->links();!!}
			</div>
		</div>
	</div>

		

@endsection