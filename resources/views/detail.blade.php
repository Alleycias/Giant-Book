@extends('master')

@section('content')
    <div class="col">
        <div class="row">
            <p class="fs-2 bg-secondary text-white">{{ $title }}</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-8 d-flex align-center">
                <img src="{{$book->image}}" alt="" width="100%" height="500px">
            </div>
            <p>Title : {{$book->title}}</p>
                <p>Author : {{$book->author}}</p>
                <p>Publisher : {{$book->publisher->name}}</p>
                <p>Year : {{$book->year}}</p>
                <p>Description : </p>
                <p>{{$book->synopsis}}</p>
        </div>
    </div>
    
    
@endsection