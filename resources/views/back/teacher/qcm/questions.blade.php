@extends('layouts.admin')

@section('content')
	<h4>Listes des QCM</h4>

	<div class="add-question">
		<a href="{{route('questions.create')}}" class="waves-effect green darken-4 btn">Ajouter un QCM</a>
	</div>


	<table class="responsive-table">
        <thead>
          <tr>
		  	  <th>Nom</th>
              <th>Modifier</th>
              <th>Supprimer</th>			  
          </tr>
        </thead>

        <tbody>
        @forelse($questions as $question)
			<tr>
				<td>{{$question->title}}</td>
				<td><a href="{{route('questions.edit', $question->id)}}" class="waves-effect waves-light btn"><i class="material-icons">mode_edit</i></a></td>
				
				<td>
					<form class="delete-form" action="{{route('questions.destroy', $question->id)}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}

						<button type="submit" class="waves-effect waves-light btn red modal-trigger"><i class="material-icons">clear</i></button>
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
	
	{{--  Fenêtre modale d'avertissement avant suppression  --}}
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