@extends('layouts.admin')

@section('content')
	<h4>Voici les QCM</h4>

	<div class="add-question">
		<a href="{{route('questions.create')}}" class="waves-effect light-green lighten-2 btn">Ajouter un QCM</a>
	</div>

	<table style="width:70%;">
        <thead>
          <tr>
              <th>Nom du QCM</th>
          </tr>
        </thead>

        <tbody>
        @forelse($questions as $question)
			<tr>
				<td>{{$question->title}}</td>
				<td><a href="{{route('questions.edit', $question->id)}}" class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">mode_edit</i></a></td>
				<td><a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons">clear</i></a></td>
			</tr>
        @empty
        	<tr>
				<td>Pas de QCM enregistré.</td>
			</tr>
        @endforelse
        </tbody>
      </table>
@endsection