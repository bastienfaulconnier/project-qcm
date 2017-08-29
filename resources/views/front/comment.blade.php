@extends('layouts.master')

@section('content')
	<p>Votre commentaire a bien été enregistré. Un admistrateur va vérifier son contenu avant de le publier.</p>
	<p>Merci.</p>

	<a href="{{url('posts', $comment->post_id)}}" class="retreat">Revenir à l'article >></a>
@endsection