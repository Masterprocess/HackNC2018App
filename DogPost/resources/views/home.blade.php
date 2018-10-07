@extends('layouts.app')

@section('content')

@auth
<div class = "col-md-6">
	<button href = "{{ route('createPetPost') }}">Creae Pet Post</button>
</div>
@endAuth

@foreach($pets as $pet)
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><a href = "{{ route('petDetails', $pet->id) }}">{{ $pet->name }}</a></h5>
    <h6 class="card-subtitle mb-2 text-muted">{{ $pet->type }}</h6>
    <p class="card-text">{{ $pet->description }}</p>
  </div>
</div>
@endforeach

@endsection