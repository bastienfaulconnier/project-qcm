<ul id="nav-mobile" class="side-nav fixed" style="transform: translateX(0%);">
    <li><div class="user-view">			
        <div class="background">
            <img src="{{ URL::asset('img/maths.jpg') }}">
        </div>
        <p><strong>Bonjour, {{auth()->user()->username}}</strong></p>
    </div></li>
    <li><a class="waves-effect" href="{{route('student/home')}}">Dashboard</a></li>
    <li><a class="waves-effect" href="{{route('student/qcm/index')}}">QCM</a></li>				
</ul>
<a href="#" data-activates="slide-out" class="button-collapse show-on-large"><i class="mdi-navigation-menu"></i></a>