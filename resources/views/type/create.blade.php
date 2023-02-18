@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Ajout</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('create')}}">Liste</a>
	</div>
</div>
@if($errors->any())
<div class="row">
	<div class="col-12">
		<div class="alert alert-danger alert-dismissible fade show" role="alert">
		  <strong>Message d'erreur</strong>
		  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		  <ul>
		  	@foreach($errors->all() as $error)
		  	<li>{{$error}}</li>
		  	@endforeach
		  </ul>
		</div>
	</div>
</div>
@endif
<div class="row">
	<div class="col-12">
		<form method="POST" action="{{route('.store')}}">
			@csrf
			<div class="mb-3">
			    <label for="nom" class="form-label">libelle</label>
			    <input type="text" class="form-control" id="libelle" name="libelle" >
		  	</div>
		  	<button type="submit" class="btn btn-primary">Enregistrer</button>
		</form>
	</div>
</div>
@endsection