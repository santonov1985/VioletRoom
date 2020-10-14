@extends('layouts.main')
@section('content')
    <div class="d-flex justify-content-around mt-2">
        @foreach($movies as $movie)
        <div class="card mb-3 mt-3" style="max-width: 540px;">
            <div class="row g-1">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{$movie->img}}"  alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><u>{{$movie->title}}</u></h2>
                        <p class="card-text-year"><strong>Год выпуска:</strong> {{$movie->year}} </p>
                        <p class="card-text-country"><strong>Страна:</strong> {{$movie->country}}</p>
                        <p class="card-text-genre"><strong>Жанр:</strong> {{$movie->genre}}</p>
                        <p class="card-text-time"><strong>Продолжительность:</strong> {{$movie->time}} мин.</p>
                        <p class="card-text-description"><strong>Сюжет:</strong> {{$movie->description}}</p>
                        <p class="card-text-director"><strong>Режиссер:</strong> {{$movie->director}} </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="card mb-3 mt-3" style="max-width: 540px;">
            <div class="row g-1">
                <div class="col-md-4">
                    <img class="img-thumbnail" src="{{asset('img/movies/venom.jpeg')}}"  alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h2 class="card-title"><u>Веном</u></h2>
                        <p class="card-text-year"><strong>Год выпуска:</strong> 2019</p>
                        <p class="card-text-country"><strong>Страна:</strong> Великобритания, Чехия, США, Германия, Багамы</p>
                        <p class="card-text-genre"><strong>Жанр:</strong> Фэнтази</p>
                        <p class="card-text-time"><strong>Продолжительность:</strong> 139 мин</p>
                        <p class="card-text-genre"><strong>Сюжет:</strong> Используя богатый шпионский арсенал, Джеймс Бонд вступает
                            в поединок с финансовым гением преступного мира Ле Шиффром. Но генеральное сражение против
                            него можно выиграть лишь силой ума, и не на поле боя, а на зеленом сукне казино «Рояль»

                            Используя богатый шпионский арсенал, Джеймс Бонд вступает в поединок с финансовым гением
                            преступного мира Ле Шиффром. Но генеральное сражение против него можно выиграть лишь силой ума,
                            и не на поле боя, а на зеленом сукне казино «Рояль»</p>
                        <p class="card-text-time"><strong>Режиссер:</strong> Мартин Кэмпбелл</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
