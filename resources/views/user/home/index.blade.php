@extends('layouts.main')
    @section('title')
        Главная страница
    @endsection

    {{--SLIDER--}}
    @section('slider')
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/slider/slide_1.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/slide_2.jpg') }}" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider/slide_3.jpg') }}" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    @endsection
    {{--CONTENT--}}
    @section('content')
        <div class="container index-container">
            <div class="row">

                <div class="col-md-12">
                    <div class="card text-center mt-2 mb-2">
                        <p class="card-text index-title"><strong>Violet Rooms</strong> - это не кинотеатр, это АНТИкинотеатр, где вы сами выбираете фильм, время и свое окружение!</p>
                    </div>

                </div>
                <div class="col-md-12">
                    <div class="three-block">
                        @foreach($stocks as $stock)
                        <div class="item">
                            <div class="item__image">
                                <img src="{{ $stock->img }}" class="image-cover" alt="...">
                            </div>
                            <div class="title">{{$stock->title}}</div>
                            <p class="card-text">{{$stock->description}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    @endsection

