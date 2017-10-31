@extends('layout')

@section('container')
		
<h1>La liste des produits</h1>
<table class="table table-bordered table-striped">
	<tr>
		<th>Nom du produit</th>
		<th>Lien</th>
		<th>Prix</th>
		<th>Description</th>
		<th>Période</th>
		<th>Promotion</th>
		<th>ID produit</th>
		<th>Categorie</th>
		<th>Actions</th>
	</tr>
	<tbody>
		
		@foreach($produits as $produit)
		<tr>
			 
			
			<td>{{$produit->name}}</td>
			<td><a href="{{$produit->url}}">Lien du produit</a></td>
			<td>{{$produit->prix}}</td>
			<td>{{$produit->description}}</td>
			<td>{{$produit->periode}}</td>
			<td>{{$produit->promotion}}</td>
			<td>{{$produit->produit_id}}</td>
			<td>{{$produit->category->name}}</td>
			
			<td><a href=" {{route('show-product', $produit->id)}}"> Détails</a></td>
		</tr>
		@endforeach
	</tbody>
</table>

@stop