@extends('layouts.admin')

@section('content')
	<h5>Nouveau QCM -1e partie</h5>
	<p>Rentrez l'intitulé</p>
	@if(count($errors) > 0)
	    <div class="alert alert-danger">
	        <p>Une erreure est survenue dans le formulaire</p>
	    </div>
	@endif

	<form class="col s8" action="{{url('teacher/questions/create-second-step')}}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}

		<div class="row">
			<div class="input-field col s8">
				<input name="title" value="{{old('name')}}" type="text" class="validate" placeholder="Titre">
				<label class="active" for="title">Titre</label>
				@if($errors->has('name')) <span>{{$errors->first('name')}}</span>@endif
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				<select name="class_level">
					<option selected>Choisir la classe</option>
					<option value="first_class">First class</option>
					<option value="final_class">Final class</option>
				</select>
				<label for="" class="active" for="class_level">Classe</label>
				@if($errors->has('class_level')) <span>{{$errors->first('class_level')}}</span>@endif
			</div>

			<div class="input-field col s4">
				<input name="number_choice" value="{{old('number_choice')}}" type="number" class="validate" placeholder="0" min="1" max="20">
				<label class="active" for="number_choice">Nombre de question</label>
				@if($errors->has('number_choice')) <span>{{$errors->first('number_choice')}}</span>@endif
			</div>
		</div>

		<div class="row">
			<div class="input-field col s8">
				<input name="content" value="{{old('name')}}" type="text" class="validate" placeholder="Description">
				<label for="content" class="active">Description</label>
			</div>
		</div>

		<div class="row">
			<p>
				<input type="radio" id="check-yes" name="status" value="published">
      			<label for="check-yes">Published</label>
			</p>
			<p>
      			<input type="radio" id="check-no" name="status" value="unpublished">
      			<label for="check-no">Unpublish</label>
  			</p>
		</div>

		<div class="row">
			<div class="input-field col s2">
				<button class="btn waves-effect waves-light" type="submit" name="action">
					Suite
				</button>
			</div>
		</div>
	</form>
@endsection