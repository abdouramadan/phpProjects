@extends('base')

@section('title')
    {{$post['title']}}
@endsection

@section('content')
    <section class="container my-5">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title text-capitalize">{{$post['title']}}</h4>
                <p class="card-subtitle text-capitalize">posted by : {{$post['author']}}</p>
                <p class="card-text">{{$post['body']}}</p>
            </div>
            <div class="card-footer">
                <a href="/edit/{{$post['id']}}" class="btn btn-md btn-info text-capitalize">edit</a>
                <form action="/add/delete/{{$post['id']}}" method="post" class="d-inline">
                    @csrf
                    <input type="submit" class="btn btn-danger text-capitalize" value="delete">
                </form>
            </div>
        </div>
    </section>
@endsection
