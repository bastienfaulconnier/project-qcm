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
				<td><a href="{{route('questions.edit', $question->id)}}" class="btn-floating btn-large waves-effect waves-light green"><i class="material-icons">mode_edit</i></a></td>
				
				<td>
					<form class="delete-form" action="{{route('questions.destroy', $question->id)}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}

						<button type="submit" class="btn-floating btn-large waves-effect waves-light red modal-trigger"><i class="material-icons">clear</i></button>
					</form>
				</td>
			</tr>
        @empty
        	<tr>
				<td>Pas de QCM enregistré.</td>
			</tr>
        @endforelse
        </tbody>
    </table>

	<div id="modal1" class="modal red white-text">
		<div class="modal-content">
			<h4>Supprimer</h4>
			<p>Voulez-vous vraiment supprimer ce QCM ?</p>
		</div>
		<div class="modal-footer red">
			<a id="agree-delete" class="waves-effect waves-green btn-flat white-text">OUI</a>
			<a id="denie-delete" class="modal-action modal-close waves-effect waves-green btn-flat white-text">NON</a>
		</div>
	</div>
@endsection