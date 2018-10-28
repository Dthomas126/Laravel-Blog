@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard </div>
              
                <div class="card-body">
                    <button type="button" class="btn btn-primary">Create Post</button>
                    <h3 class="text-center">Posts</h3>
                    <hr>
                    <ul class="list-group">
                        @foreach ($posts as $post)
                        <li class="list-group-item mb-3"><a href="show/{{$post->id}}">{{$post->title}}</a></li>

                    @endforeach
                    </ul>
             

                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
