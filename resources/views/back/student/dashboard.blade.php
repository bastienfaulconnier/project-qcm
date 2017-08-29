@extends('layouts.admin')

@section('content')
	<p>Welcome on the Student's dashboard !</p>

	{{--  Affichage du bloc QCM se trouvant en home  --}}
	<div class="row">
		<div class="col s12 m6">
			<div class="card green darken-4">
				<div class="card-content white-text">
					<span class="card-title">Derniers QCM</span>
					@forelse($questions as $question)
						<a href="{{route('student/qcm/doing', $question->id)}}"><p> {{$question->title}} </p></a>
					@empty
						<p>Aucun QCM.</p>
					@endforelse
				</div>
				<div class="card-action">
					<a href="{{route('student/qcm/index')}}">Voir tous les QCM</a>
				</div>
			</div>
		</div>
	</div>
	
@endsection