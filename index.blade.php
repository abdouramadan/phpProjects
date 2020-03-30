@extends('base')

@section('title')
    Home Page
@endsection

@section('content')
    <section class="container my-5 text-center bg-light p-5">
        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            {{Session::get('success')}}
            <a class="close" data-dismiss="alert">&times;</a>
        </div>
        @endif
        <h1 class="text-capitalize">welcome to our blog - sign up to join us</h1>
        <div class="buttons mt-4">
            <a href="/add" class="text-capitalize btn btn-success">add post</a>
            <a href="/signup" class="text-capitalize btn btn-primary">create account</a>
        </div>
    </section>

    <div class="container">
        @foreach($posts as $post)
            <div class="card mt-4">
                <div class="card-body">
                    <h4 class="card-title text-capitalize">{{ $post['title']  }}</h4>
                    <h5 class="text-capitalize font-italic">created by : {{ $post['author']  }} <span class="card-subtitle">{{$post['created_at']}}</span> </h5>
                    <p class="crad-text">{{ substr($post['body'],0,100) }}</p>
                </div>
                <div class="card-footer">
                    <a href="/read/{{ $post['id']  }}" class="btn btn-info text-capitalize">read more</a>
                </div>
            </div>
        @endforeach
        @if(count($posts)  == 0)
            <div class="alert alert-info text-capitalize">sorry no posts available. </div>
        @endif
    </div>
@endsection
