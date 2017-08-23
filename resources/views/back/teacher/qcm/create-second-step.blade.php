@extends('layouts.admin')

@section('content')
	<h5>Nouveau QCM -2e partie</h5>
	<p>Rentrez les questions</p>
	@if (count($errors) > 0)
	    <div class="alert alert-danger">
	        <p>Une erreure est survenue dans le formulaire</p>
	    </div>
	@endif

	<form class="col s8" action="{{route('questions.store')}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}
		
		<h4>{{$question->title}}</h4>

		@for($i = 0; $i < $number; $i++)
			<input type="hidden" name="question_id" value="{{$question->id}}">
			<input type="hidden" name="number" value="{{$number}}">

			<div class="row">
				<div class="input-field col s6">
					<input name="content[]" value="{{old('content')}}" type="text" class="validate" placeholder="Question" required>
					<label class="active" for="content-{{$i}}">Question</label>
					@if($errors->has('content')) <span>{{$errors->first('content')}}</span>@endif
				</div>

				<p>
					<input type="radio" id="check-yes-{{$i}}" name="{{$i}}" value="yes">
	      			<label for="check-yes-{{$i}}">Oui</label>
				</p>
				<p>
	      			<input type="radio" id="check-no-{{$i}}" name="{{$i}}" value="no">
	      			<label for="check-no-{{$i}}">Non</label>
      			</p>
      			@if($errors->has('status')) <span>{{$errors->first('status')}}</span>@endif
			</div>
		@endfor

		<div class="row">
			<div class="input-field col s2">
				<button class="btn waves-effect waves-light" type="submit" name="action">
					Créer
				</button>
			</div>
		</div>
	</form>
@endsection