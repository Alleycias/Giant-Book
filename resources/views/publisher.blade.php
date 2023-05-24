@extends('master')

@section('content')
<div class="container bg-secondary py-2">
  <p class="text-white fs-4 m-0">{{ $title }}</p> 
</div>

<div class="row">
      @foreach ($publishers as $publisher)
      <div class="col-xx1-3 col-xl-3 col-1g-4 col-m-6 col-xs-6 col-12 gy-3">
        <div class="card">
          <img src="{{ $publisher->image }}" class="card-img-top" alt="">
          <div class="card-body">
            <h5 class="card-title">{{ $publisher->name }}</h5>
            <p class="card-text">{{ $publisher->address}}</p>
            <a href="/publisherDetail/{{ $publisher->id}}" class="btn btn-primary">detail</a>
          </div>
        </div>
      </div> 
    @endforeach
  </div>
@endsection