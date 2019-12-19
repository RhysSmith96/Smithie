	@extends('layouts.app')

	@section('title', 'Profiles')

	@section('content')




	<h1 align="Center">Creating your Profile</h1>
	<br>
	<br>
	<div class="row">
		<div class="col-md-10">
			<h1>Your Details</h1>
		</div>


	</div> <!-- end of .row -->
	<form method="POST" action="{{route('profiles.store')}}">

		<div class="row">
			<div class="col-md-12">
				<table class="table">
					<thead>
						<th>Name</th>
						<th>Age</th>
						<th>Hobbies</th>
						<th>Address</th>
						<th></th>
					</thead>

					<tbody>

						<tr>
							@csrf
							<td><input type="text" name="name" value="{{old('name')}}"></td>
							<td><input type="text" name="age"	value="{{old('age')}}"></td>
							<td><input type="text" name="hobbies" value="{{old('hobbies')}}"></td>
							<td><input type="text" name="address"	value="{{old('address')}}"></td>

						</tr>


					</tbody>
				</table>

				<input type="submit" value="Submit" class="btn btn-lg btn-primary btn-1-spacing">

				<a href="{{route('profiles.index')}}"class="btn btn-lg btn-primary btn-1-spacing">Cancel</a>
			</form>
		</div>
	</div>




	@endsection