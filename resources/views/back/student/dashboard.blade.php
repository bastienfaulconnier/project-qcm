@extends('layouts.admin')

@section('content')
	<p>Welcome on the Student's dashboard !</p>

	<div class="row">
		<div class="col s12 m6">
			<div class="card green darken-4">
				<div class="card-content white-text">
					<span class="card-title">Derniers articles</span>
					@forelse($questions as $question)
						<a href="{{route('student/qcm/doing', $question->id)}}"><p> {{$question->title}} </p></a>
					@empty
						<p>Aucun article.</p>
					@endforelse
				</div>
				<div class="card-action">
					<a href="{{route('student/qcm/index')}}">Voir tous les QCM</a>
				</div>
			</div>
		</div>
	</div>
	
@endsection