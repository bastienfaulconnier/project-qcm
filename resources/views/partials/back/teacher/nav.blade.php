<ul id="mav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
    <li><div class="user-view">			
        <div class="background">
            <img src="{{ URL::asset('img/maths.jpg') }}">
        </div>
        <p><strong>Bonjour, admin</strong></p>
        <p>Bonne journée !</p>
    </div></li>
    <li><a class="waves-effect" href="{{url('teacher/dashboard')}}">Dashboard</a></li>
    <li><a class="waves-effect" href="#!">Fiches</a></li>
    <li><a class="waves-effect" href="{{url('teacher/listposts')}}">Articles</a></li>				
    <li><a class="waves-effect" href="#!">Commentaires</a></li>				
    <li><a class="waves-effect" href="#!">Pages</a></li>				
    <li><a class="waves-effect" href="#!">Élèves</a></li>				
</ul>
<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>