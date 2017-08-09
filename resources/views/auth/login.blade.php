@extends('layouts.master')

@include('partials.flash')

@section('content')

    <form action="{{url('login')}}" method="POST">

        {{csrf_field()}} {{-- token pour protéger votre formulaire CSRF --}}

        <div>
            <input type="text"  value="{{old('username')}}" name="username">
            <label for="Username">Username</label>
            @if($errors->has('username')) 
                <span>{{$errors->first('username')}}</span>
            @endif
        </div>

        <div>
            <input type="password" name="password">
            <label for="Password">Password</label>
             @if($errors->has('password')) <span>{{$errors->first('password')}}</span>@endif
        </div>

        <div>
            <div>
                <input {{old('remember')? 'checked' : ''}} type="checkbox" id="remember" name="remember" value="remember"/>
                <label for="remember">se souvenir de moi</label>
            </div>
        </div>

        <div>
            <div>
                <button type="submit" name="action">Submit
                    send
                </button>
            </div>
        </div>

    </form>

@endsection