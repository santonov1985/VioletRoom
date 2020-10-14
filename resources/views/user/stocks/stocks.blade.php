@extends('layouts.main')
@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            @foreach($stocks as $stock)
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-thumbnail stock_img" src="{{$stock->img}}"  alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$stock->title}}</h5>
                                <p class="card-text">{{$stock->description}}</p>
                                <p class="card-text"><small class="text-muted">{{$stock->created_at}}</small></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
