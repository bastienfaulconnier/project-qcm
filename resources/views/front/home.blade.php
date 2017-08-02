{{--   @extends('layouts.master')   --}}

@section('content')
        <div class="content">
        
         @forelse($posts as $post)
            <p> {{$post->title}} </p>
           @empty
           <p>osef</p>
         @endforelse
        </div>
@endsection