@extends('layouts.admin')

@section('content')
	<h4>{{$question->title}}</h4>
	<h5>{{$question->content}}</h5>

	<form action="{{route('student/qcm/done', $question->id)}}" method="post" enctype="multipart/form-data">
		{{csrf_field()}}

		@for($i = 0; $i < $question->choices->count(); $i++)
			<input type="hidden" name="number_choice" value="{{$question->choices->count()}}">
			<div class="row">
				<div class="input-field col s6">
					<h6>{{$question->choices[$i]->content}}</h6>
				</div>

				<p>
					<input type="radio" id="check-yes-{{$i}}" name="{{$i}}" value="yes">
	      			<label for="check-yes-{{$i}}">Oui</label>
	      			
	      			<input type="radio" id="check-no-{{$i}}" name="{{$i}}" value="no">
	      			<label for="check-no-{{$i}}">Non</label>
	      		</p>


			</div>
		@endfor

		<div class="row">
			<div class="input-field col s2">
				<button class="btn waves-effect waves-light" type="submit" name="action">
					Envoyer
				</button>
			</div>
		</div>

	</form>
@endsection