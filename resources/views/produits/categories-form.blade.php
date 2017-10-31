@extends('layout')

@section('container')
@if(isset($category))
{!! Form::model($category, ['url' => route('update-category', $category->id), 'files'=>true]) !!}
@else
{!! Form::open(['url' => route('save-category'), 'files'=>true]) !!}
@endif	
 	<h1>Ajouter ou modifier une catégorie</h1>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
		    <label>Nom de la catégrie</label>
		    {!! Form::text('name', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Nom de la catégrie']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Lien de la catégorie</label>
		    {!! Form::url('url', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Lien de la catégrie']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Type</label>
		    {!! Form::select('type', $type_category, null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Type de la catégrie']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Photo thème</label>
		    <input type="file" name="theme" class="form-control">
	
		  </div>
		</div>

		
		<div class="col-md-12">
			<hr>
			<h4>Détail de la page produit</h4>
		</div>
		<div class="col-md-6">
			<div class="form-group">
		    <label>Class produit</label>
		    {!! Form::text('html_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
		    <label>Class du nom du produit</label>
		    {!! Form::text('name_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>	


		<div class="col-md-6">
			<div class="form-group">
		    <label>Class de l'image du produit</label>
		    {!! Form::text('image_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>	

		<div class="col-md-6">
			<div class="form-group">
		    <label>Class de l'ID du produit</label>
		    {!! Form::text('id_produit', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Class du lien du produit</label>
		    {!! Form::text('url_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>


		<div class="col-md-6">
			<div class="form-group">
		    <label>Class du prix du produit</label>
		    {!! Form::text('prix_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Class de description du produit</label>
		    {!! Form::text('description_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Class de période du produit</label>
		    {!! Form::text('periode_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Class de promotion du produit</label>
		    {!! Form::text('promotion_classname', null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Classname']) !!}
		  </div>
		</div>

		<div class="col-md-6">
			<div class="form-group">
		    <label>Type du "block"</label>
		    {!! Form::select('type_produit', $type_produit, null, ['class' => 'form-control', 'required'=>true, 'placeholder'=>'Type de la catégrie']) !!}
		  </div>
		</div>

		<div class="col-md-12">
			<div class="form-group text-right">
				<button class="btn btn-success">Enregistrer</button>
			</div>
		</div>


	</div>

{!! Form::close() !!}


@stop