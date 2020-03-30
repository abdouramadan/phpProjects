@extends('base')

@section('title')
    Add Post
@endsection

@section('content')
    <section class="container my-5 bg-light p-5">
        <form action="/add" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="text-capitalize">title</label>
                <input type="text" class="form-control" name="title">
            </div>
            @error('title')
                <div class="alert alert-danger text-capitalize">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="author" class="text-capitalize">author</label>
                <input type="text" class="form-control" name="author">
            </div>
            @error('author')
                <div class="alert alert-danger text-capitalize">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="body" class="text-capitalize">body</label>
                <textarea class="form-control" name="body"></textarea>
            </div>
            @error('body')
                <div class="alert alert-danger text-capitalize">{{$message}}</div>
            @enderror
            <input type="submit" class="btn btn-primary btn-md" value="Add">
        </form>
    </section>
@endsection
