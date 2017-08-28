@extends('layouts.admin')

@section('content')
	<h4>Les commentaires</h4>

	<table style="width:70%;">
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

							<button type="submit" class="waves-effect waves-light btn" name="status" value="published">Publier</button>
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

						<button type="submit" class="waves-effect waves-light btn"><i class="material-icons">clear</i></button>
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
@endsection