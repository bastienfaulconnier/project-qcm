@extends('layouts.admin')

@section('content')

<h4>Liste des articles</h4>

<div class="addpost ">
    <a href="{{ route('posts.create')}}" class="waves-effect waves-light btn green darken-4">Ajouter un article</a>
</div>

<table class="responsive-table">
        <thead>
          <tr>
              <th>Titre</th>
              <th>Statut</th>
              <th>Editer</th>
              <th>Supprimer</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->status}}</td>
                <td><a href="{{ route('posts.edit', $post->id) }}" class="waves-effect waves-light btn"><i class="material-icons ">edit</i></a></td> 
                <td>
                    <form class="delete-form" action="{{route('posts.destroy', $post->id)}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}

						<button type="submit" class="waves-effect waves-light btn red modal-trigger"><i class="material-icons">clear</i></button>
					</form>
                </td>
            </tr>               
              @empty
              <p>Vide.</p>
              @endforelse
        </tbody>
      </table>

    {{--  Fenêtre modale d'avertissement avant suppression  --}}
      <div id="modal1" class="modal red white-text">
		<div class="modal-content">
			<h4>Supprimer</h4>
			<p>Voulez-vous vraiment supprimer cet article ?</p>
		</div>
		<div class="modal-footer red">
			<a id="agree-delete" class="waves-effect waves-green btn-flat white-text">OUI</a>
			<a id="denie-delete" class="modal-action modal-close waves-effect waves-green btn-flat white-text">NON</a>
		</div>
	</div>

@endsection