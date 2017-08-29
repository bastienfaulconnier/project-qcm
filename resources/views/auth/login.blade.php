@extends('layouts.master')

@section('content')
    <div class="connexion-part parts">
        <h2>Connexion</h2>
        <p>Connectez-vous à votre espace.</p>
    </div>

    <form action="{{url('login')}}" method="post" novalidate>
        {{csrf_field()}}
        
        <div class="form-input">
            <input type="text" value="{{old('username')}}" name="username" required placeholder="Username">
        </div>

        <div class="form-input">
            <input type="password" name="password" required placeholder="Password">
        </div>

        <input type="submit" name="action" value="connexion">

        
        @if($errors->has('username')) 
            <span>{{$errors->first('username')}}</span>
        @endif
        @if($errors->has('password')) <span>{{$errors->first('password')}}
            </span>
        @endif
        @include('partials.flash')
    </form>
</section>
@endsection

