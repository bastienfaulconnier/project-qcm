@extends('layouts.master')

@include('partials.flash')

@section('content')

    <section id="contact" class="connexion">
        <div class="head-section eight columns">
            <h3>Connexion</h3>
            <hr>
            <span>Connectez-vous à votre espace.</span>  
        </div>

        <form class="eight columns" action="{{url('login')}}" method="POST">
            {{ csrf_field() }}

            <input type="text" value="{{old('username')}}" name="username" class="six columns" required placeholder="Username">
            @if($errors->has('username')) 
                <span>{{$errors->first('username')}}</span>
            @endif

            <input type="password" name="password" class="six columns" required placeholder="Password">
             @if($errors->has('password')) <span>{{$errors->first('password')}}</span>
             @endif
            
            <input type="submit" name="action" value="connexion">
        </form>

    <section id="contact" class="connexion">

@endsection