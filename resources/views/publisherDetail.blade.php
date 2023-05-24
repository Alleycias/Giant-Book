@extends('master')

@section('content')
<div class="container bg-secondary py-2">
    <p class="text-white m-0">{{ $publisher->name }}</p>
    <p class="text-white m-0">Address - {{ $publisher->address }}</p>
    <p class="text-white m-0">Phone - {{ $publisher->phone }}</p>
    <p class="text-white m-0">Email - {{ $publisher->email }}</p>
</div>

<div class="row">
    @foreach($books as $book)
    <div class="col-xxl-3 col-xl-3 col-lg-4 col-md-6 col-xs-6 col-12 gy-3">
        <div class="card">
            <img src="{{ $book->image }}" class="card-img-top" alt="">
            <div class="card-body">
                <h5 class="card-title">{{ $book->title}}</h5>
                <p class="card-text m-0">by</p>
                <p class="card-text">{{ $book->author }}</p>
                <a href="/detail{{ $book->id }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection