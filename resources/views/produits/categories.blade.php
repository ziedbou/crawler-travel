@extends('layout')

@section('container')
		
<h1>La liste des catégories</h1>
<table class="table table-bordered table-striped">
	<tr>
		<th>Nom de la categorie</th>
		<th>Type</th>
		<th>Etat</th>
		<th>Configuration</th>
		<th>Produits</th>
	</tr>
	@foreach($categories as $category)
	<tr>
		<td>{{$category->name}}</td>
		<td>{{$type_category[$category->type]}}</td>
		<td>{{$category->state}}</td>
		<td><a href=" {{route('edit-category', $category->id)}}">Configurer</a></td>
		<td><a href=" {{route('edit-category', $category->id)}}">Liste des produits</a></td>
	</tr>
	@endforeach
</table>

@stop