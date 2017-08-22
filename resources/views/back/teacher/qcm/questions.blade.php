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
				<td><a href="" class="waves-effect light-blue lighten-3 btn">Éditer</a></td>
				<td><a href="" class="waves-effect deep-orange darken-1 btn">Supprimer</a></td>
			</tr>
        @empty
        	<tr>
				<td>Pas de QCM enregistré.</td>
			</tr>
        @endforelse
        </tbody>
      </table>
@endsection