@extends('layouts.admin')

@section('content')
<div class="addpost">
    <a href="#" class="waves-effect waves-light btn">Ajouter un article</a>
</div>

<table class="centered responsive-table">
        <thead>
          <tr>
              <th>Titre</th>
              <th>Auteur</th>
              <th>Commentaires</th>
              <th>Statut</th>
              <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{$post->title}}</td>
                <td>{{--  {{$post->user? $post->user->username: 'aucun auteur'}}  --}}</td>
                <td>0</td>
                <td>{{$post->status}}</td>
                <td><a href="{{ url('teacher/editpost', $post->id) }}" class="waves-effect waves-light btn">Edit</a></td>
                
            </tr>               
              @empty
              <p>Vide.</p>
              @endforelse
        </tbody>
      </table>

@endsection