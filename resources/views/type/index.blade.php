@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-12 col-md-10">
		<h3>Liste Classe</h3>
	</div>
	<div class="col-12 col-md-2 text-end">
		<a class="btn btn-primary" href="{{route('type/create')}}">Ajouter Etudiant</a>
	</div>

</div>
<div class="row">
	


    <div class="row">
	<div class="col-12">
		<table class="table table-primary">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">libelle</th>
		      
		    </tr>
		  	</thead>
		  	<tbody>
	  		@if($type->count() > 0)
			  	@foreach($types as $type)
			    <tr>
			      <td>{{$loop->index + 1}}</td>
			      <td>{{$type->libelle}}</td>
			      
			      <td>
  	                
			      </td>
			    </tr>
			    @endforeach
		    @else
		    <tr>
		      <td colspan="4">tu dois ajouter</td>
		    </tr>
		    @endif
		  	</tbody>
		</table>
		
	</div>
</div>

    
</div>
@endsection