<div class="nav-wrapper">
    <ul id="slide-out" class="side-nav fixed">
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
    
</div>
