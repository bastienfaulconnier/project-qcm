@extends('layouts.admin')

@section('content')
	<h3>Nouveau QCM</h3>
	<p>Rentrez la question</p>
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <p>Une erreure est survenue dans le formulaire</p>
	    </div>
	@endif

	<form class="col s8" action="{{url('teacher/qcm/create-two')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}

		<div class="row">
			<div class="input-field col s6">
				<input name="title" value="{{old('name')}}" id="title" type="text" class="validate" placeholder="Titre">
				<label class="active" for="title">Titre</label>
			</div>
		</div>

		<div class="row">
			<div class="input-field col s4">
				<select name="class_level" style="opacity:1;width:auto;height:auto;pointer-events:auto;">
					<option selected>Choisir la classe</option>
					<option value="first_class">First class</option>
					<option value="final_class">Final class</option>
				</select>
				<label for="" class="active" for="class_level">Classe</label>
			</div>

			<div class="input-field col s4">
				<input name="number_choice" value="{{old('number_choice')}}" type="number" class="validate" placeholder="0" min="1" max="5">
				<label class="active" for="number_choice">Nombre de question</label>
			</div>
		</div>


	</form>
@endsection