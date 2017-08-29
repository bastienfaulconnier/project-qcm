@if($flash = session('message'))
    <div  class="flash"><span>{{$flash}}</span></div>
@endif