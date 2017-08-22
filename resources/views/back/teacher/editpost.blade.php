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

    <form class="col s12 postform" action="" method="post" enctype="multipart/form-data" >
        {{csrf_field()}}
        {{ method_field('PUT') }}

        <div class="row">
            <div class="input-field col s6">
            <input placeholder="Titre" id="title" type="text" class="validate" value="{{$post->title}}">
        </div>

        <div class="row">
            <div class="input-field col s12">
          <textarea placeholder="Extrait" id="textarea1" class="materialize-textarea">{{$post->abstract}}</textarea>
        </div>

        <div class="row">
            <div class="input-field col s12">
          <textarea placeholder="Texte" id="text" class="materialize-textarea">{{$post->content}}</textarea>
        </div>

        <div class="row">
            <div class="input-field col s6">
            <input placeholder="Auteur" id="Author" type="text" class="validate">
        </div>

       {{--   <div class="row">
            <div class="input-field col s12">
                <select>
                <option value="" disabled selected>Choose your option</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
                </select>
                <label>Materialize Select</label>
            </div>
        </div>  --}}

        <div class="file-field input-field">
            <div class="btn">
                <span>Fichier</span>
                <input type="file">
            </div>
            <div class="file-path-wrapper">
                <input class="file-path validate" type="text">
            </div>
        </div>

        <div class="switch">
            <label>
            Publié
            <input type="checkbox">
            <span class="lever"></span>
            </label>
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