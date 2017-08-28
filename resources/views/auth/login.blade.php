@extends('layouts.master')

@section('content')

    <section id="contact" class="connexion">
        <div class="head-section eight columns">
            <h3>Connexion</h3>
            <hr>
            <span>Connectez-vous à votre espace.</span>  
        </div>

        <form class="eight columns" action="{{url('login')}}" method="POST" novalidate>
            {{ csrf_field() }}

            <input type="text" value="{{old('username')}}" name="username" class="six columns" required placeholder="Username">
            

            <input type="password" name="password" class="six columns" required placeholder="Password">

            <input type="submit" name="action" value="connexion">

            @if($errors->has('username')) 
                <span>{{$errors->first('username')}}</span>
            @endif
            @if($errors->has('password')) <span>{{$errors->first('password')}}
                </span>
            @endif
            @include('partials.flash')
            
        </form>

    <section id="contact" class="connexion">

@endsection