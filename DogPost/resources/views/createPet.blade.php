@extends('layouts.app')

@section('content')

<form method = "post" action = "{{ route('store_new_pet') }}">
	<div class = "form-group">
		<select class = "form-control" name = "pet_type">
			<option value = "">Select a Type</option>
			<option value = "Dog">Dog</option>
			<option value = "Cat">Cat</option>
			<option value = "Hamster">Hamster</option>
		</select>
	</div>

	<div class "form-group">
		<input type="text" name="pet_name" class = "form-control /">
		<select class = "form-control" name = "pet_age">
			@for($i = 0; $i <= 30; $i++)
				<option value = "{{ $i }}">{{ $i }}</option>
			@endfor
		</select>

		<input type="text" name="pet_breed" class = "form-control /">
		<textarea rows = "4" cols = "50" class = "form-control" name = "pet_description"/>
	</div>

	<div class = "form-group">
		<input type="text" name="pet_addressLine1" class = "form-control /">
		<input type="text" name="pet_addressLine2" class = "form-control /">
		<input type="text" name="pet_city" class = "form-control /">
		<input type="text" name="pet_state" class = "form-control /">
		<input type="text" name="pet_zip" class = "form-control /">
		<input type="text" name="pet_country" class = "form-control /">
	</div>

	<div class = "form-group">
		<button type = "submit" class = "btn btn-primary">Create Pet</button>
	</div>
</form>

@endsection