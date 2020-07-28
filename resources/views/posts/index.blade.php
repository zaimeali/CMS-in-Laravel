@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <?php
        // if(count($posts)){
        //     foreach ($posts as $post) {
                ?>
            {{-- <div class="jumbotron">
                <p>wow</p>
            </div> --}}
                 <?php
        //     }
        // }
        // else{
        //     echo "<h2>No Post Found</h2>";
        // }
    ?>
    @if (count($posts))
        @foreach ($posts as $post)
            <div class="jumbotron">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small>written on {{ $post->created_at }}</small>
            </div>
        @endforeach
        {{ $posts->links() }}
    @else
        <p>No Post Found</p>
    @endif
@endsection