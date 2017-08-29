@extends('layouts.admin')

@section('content')
	<h4>Liste des commentaires</h4>

	<table class="responsive-table">
        <thead>
          <tr>
              <th>Nom article</th>

              <th>Commentaires</th>

              <th>Auteur</th>

              <th>Publier</th>

              <th>Supprimer</th>
          </tr>
        </thead>

        <tbody>
        @forelse($comments as $comment)
			<tr>
				<td>{{$comment->post->title}}</td>
				<td>{{$comment->content}}</td>
				<td>{{$comment->name}}</td>

				@if($comment->status === 'unpublished')
					<td>
						<form action="{{route('teacher/comments/update', $comment->id)}}" method="post">
							{{csrf_field()}}
							{{method_field('PUT')}}

							<button type="submit" class="waves-effect green darken-4 btn" name="status" value="published">Publier</button>
						</form>
					</td>
				@else
					<td>
						<button type="submit" class="waves-effect waves-light btn grey" disable>Publier</button>
					</td>
				@endif

				<td>
					<form action="{{route('teacher/comments/delete', $comment->id)}}" method="post">
						{{csrf_field()}}
						{{method_field('DELETE')}}

						<button type="submit" class="waves-effect waves-light btn red modal-trigger"><i class="material-icons">clear</i></button>
					</form>
				</td>
			</tr>
        @empty
        	<tr>
				<td>Pas de commentaires.</td>
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