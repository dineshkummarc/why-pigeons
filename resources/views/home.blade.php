@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-2">
        <div class="col-6 offset-md-3">
            <form action="{{ action('HomeController@search') }}" accept-charset="UTF-8" method="get">
                <div class="input-group d-flex mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Search for restaurants">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @foreach($restaurants as $restaurant)
            <div class="module col-3 p-0">
                <a href="{{ route('home.show', $restaurant->id) }}">
                    <img src="{{ url('storage/'.$restaurant->image) }}" class="w-100">
                    <div class="content">
                        <h1>{{ $restaurant->name }}</h1>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $restaurants->links() }}
        </div>
    </div>
</div>
@endsection

