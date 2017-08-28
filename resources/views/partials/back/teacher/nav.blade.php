<div class="nav-wrapper">
    <ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
        <li><div class="user-view">			
            <div class="background">
                <img src="{{ URL::asset('img/maths.jpg') }}">
            </div>
            <p><strong>Bonjour, {{auth()->user()->username}}</strong></p>
        <li><a class="waves-effect" href="{{url('teacher/dashboard')}}">Dashboard</a></li>
        <li><a class="waves-effect" href="{{url('teacher/posts')}}">Articles</a></li>
        <li><a class="waves-effect" href="{{url('teacher/questions')}}">QCM</a></li>				
        <li><a class="waves-effect" href="{{url('teacher/comments')}}">Commentaires</a></li>			
        <li><a class="waves-effect" href="#!">Élèves</a></li>				
    </ul>
    <a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>
</div>
