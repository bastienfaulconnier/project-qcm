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

    <h3>Ajouter un article</h3>

    <form class="col s12 postform" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}

        <div class="row">
            <label for="title">Titre</label>
            <input placeholder="Titre" id="title" type="text" class="validate" name="title">
        </div>

        <div class="file-field input-field">
            <div class="btn">
                <span>Image à la une</span>
                <input name="url_thumbnail" type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

        <div class="row">
          <label for="abstract">Extrait</label>
          <textarea placeholder="Extrait" id="textarea1" class="materialize-textarea" name="abstract"></textarea>
        </div>

        <div class="row">
          <label for="content">Texte</label>
          <textarea placeholder="Texte" id="text" class="materialize-textarea" name="content"></textarea>
        </div>

        <div class="input-field col s12">
            <select name="status" id="statusform">
                <option value="unpublished">Non publié</option>
                <option value="published">Publié</option>
            </select>
            <label for="statusform" >Publication</label>
        </div>

        <div class="row robot-marge">
            <div class="input-field col s12 ">
                <button class="btn waves-effect waves-light" type="submit" name="action">Créer
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

    </form>
</div>

@endsection