@extends('layouts.admin')

@section('content')
	<h5>Modifié un QCM</h5>
	@if(count($errors) > 0)
	    <div class="alert alert-danger">
	        <p>Une erreure est survenue dans le formulaire</p>
	    </div>
	@endif

	<form class="col s8" action="{{route('questions.update', $question->id)}}" method="post" enctype="multipart/form-data" novalidate>
		{{csrf_field()}}
		{{method_field('PUT')}}

		<div class="row">
			<div class="input-field col s8">
				<input name="title" value="{{$question->title}}" type="text" class="validate" placeholder="Titre">
				<label class="active" for="title">Titre</label>
				@if($errors->has('name')) <span>{{$errors->first('name')}}</span>@endif
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				<select name="class_level" disabled>
					<option value="{{$question->class_level}}">{{$question->class_level}}</option>
				</select>
				<label for="class_level" class="active" for="class_level">Classe</label>
				@if($errors->has('class_level')) <span>{{$errors->first('class_level')}}</span>@endif
			</div>

			<div class="input-field col s4">
				<input name="number_choice" value="{{old('number_choice')}}" type="number" class="validate" placeholder="0" min="1" max="20" disabled>
				<label class="active" for="number_choice">Nombre de question</label>
				@if($errors->has('number_choice')) <span>{{$errors->first('number_choice')}}</span>@endif
			</div>
		</div>

		<div class="row">
			<div class="input-field col s8">
				<input name="content" value="{{$question->content}}" type="text" class="validate" placeholder="Description">
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
					Modifier
				</button>
			</div>
		</div>
	</form>
@endsection