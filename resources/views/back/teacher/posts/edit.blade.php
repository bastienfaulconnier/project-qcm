@extends('layouts.admin')

@section('content')

<div class="row">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <p>Une erreure est survenue dans le formulaire</p>
        <ul>
            @foreach($errors->all() as $message)
            <li>{{$message}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <h3>Modifier l'article</h3>

    <form class="col s12 postform" action="{{route('posts.update', $post->id)}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        {{ method_field('PUT') }}

        <div class="row">
            <label for="first_name">Titre</label>
            <input placeholder="Titre" id="title" type="text" class="validate" name="title" value="{{$post->title}}">
        </div>

        <div class="file-field input-field">
            <div class="btn">
                <span>Image à la une</span>
                <input type="file" name="url_thumbnail">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text" value="{{ $post->url_thumbnail }}">
            </div>
        </div>

        <div class="row">
          <label for="textarea">Extrait</label>
          <textarea placeholder="Extrait" id="textarea1" class="materialize-textarea" name="abstract">{{$post->abstract}}</textarea>
        </div>

        <div class="row">
          <label for="textarea">Texte</label>
          <textarea placeholder="Texte" id="text" class="materialize-textarea" name="content">{{$post->content}}</textarea>
        </div>

        <div class="row">
            <p>
                <input type="radio" id="check-yes" name="status" value="published">
                <label for="check-yes">Published</label>
            </p>
            <p>
                <input type="radio" id="check-no" name="status" value="unpublished">
                <label for="check-no">Unpublish</label>
            </p>
        </div>

        <div class="row robot-marge">
            <div class="input-field col s12 ">
                <button class="btn waves-effect waves-light" type="submit" name="action">Mettre à jour
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

    </form>
</div>

@endsection