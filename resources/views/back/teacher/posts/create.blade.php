@extends('layouts.admin')

@section('content')

{{--  Affichage erreur  --}}
<div class="row">
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <p>Une erreure est survenue dans le formulaire</p>
    </div>
    @endif

    <h3>Ajouter un article</h3>

    {{--  Formulaire création article  --}}
    <form class="col s12 postform" action="{{route('posts.store')}}" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}

        <div class="row">
            <label for="title">Titre</label>
            <input placeholder="Titre" id="title" type="text" class="validate" name="title">
            @if($errors->has('title')) 
                <span>{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="file-field input-field">
            <div class="btn green darken-4">
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
            @if($errors->has('abstract')) 
                <span>{{$errors->first('abstract')}}</span>
            @endif
        </div>

        <div class="row">
            <label for="content">Texte</label>
            <textarea placeholder="Texte" id="text" class="materialize-textarea" name="content"></textarea>
            @if($errors->has('content')) 
                <span>{{$errors->first('content')}}</span>
            @endif
        </div>

        <div class="input-field col s12">
            <select name="status" id="statusform">
                <option value="published">Publié</option>
                <option value="unpublished">Non publié</option>
            </select>
            <label for="statusform" >Publication</label>
        </div>

        <div class="row robot-marge">
            <div class="input-field col s12 ">
                <button class="btn waves-effect waves-light green darken-4" type="submit" name="action">Créer
                    <i class="material-icons right">send</i>
                </button>
            </div>
        </div>

    </form>
</div>

@endsection