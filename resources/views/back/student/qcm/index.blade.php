@extends('layouts.admin')

@section('content')
	<h4>Listes des QCM</h4>

	{{--  Affichage des QCM  --}}
	<table class="responsive-table">
        <thead>
          <tr>
              <th>Nom du QCM</th>
              <th>Score</th>
              <th>Action</th>
          </tr>
        </thead>

        <tbody>
        @forelse($questions as $question)
			<tr>
				<td>{{$question->title}}</td>
				@if(in_array($question->id, $scoresQuestionId))
					@for($i = 0; $i < $questions->count(); $i++)
						<td>{{$question->scores[$i]->note}} / {{$question->choices->count()}}</td>
					@endfor
					<td><a class="waves-effect waves-light btn grey" disable>Déjà fait !</a></td>
				@else
					<td>0</td>
					<td><a href="{{route('student/qcm/doing', $question->id)}}" class="waves-effect waves-light btn green darken-4">Faire le QCM</a></td>
				@endif
			</tr>
        @empty
        	<tr>
				<td>Pas de QCM enregistré.</td>
			</tr>
        @endforelse
        </tbody>
    </table>
@endsection