
@extends('layouts.layout')


@section('content')


    <div class="page__content">
        @include('layouts.slider')
        <div class="page__content--about">
            <div class="row page__title">
                <div class="col-lg-12">
                    <span class="page__title--md">Violet Rooms</span>
                    <span class="page__title--sm">- это не кинотеатр, это АНТИкинотеатр, где вы сами выбираете фильм, время и свое окружение!</span>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="page__tape">
                        <div class="page__tape--dot-col"></div>
                        <div class="page__tape-icon">
                            <img src="{{ asset('img/value.png') }}" alt="value" width="100%">
                        </div>
                        <div class="page__tape--dot-col"></div>
                    </div>
                    <div class="page__content-advantage">
                        <p class="page__title--sm">Tit01</p>
                        <p class="page__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="page__tape">
                        <div class="page__tape--dot-col"></div>
                        <div class="page__tape-icon">
                            <img src="{{ asset('img/start.png') }}" alt="start" width="100%">
                        </div>
                        <div class="page__tape--dot-col"></div>
                    </div>
                    <div class="page__content-advantage">
                        <p class="page__title--sm">Tit02</p>
                        <p class="page__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="page__tape">
                        <div class="page__tape--dot-col"></div>
                        <div class="page__tape-icon">
                            <img src="{{ asset('img/favorites.png') }}" alt="favorites" width="100%">
                        </div>
                        <div class="page__tape--dot-col"></div>
                    </div>
                    <div class="page__content-advantage">
                        <p class="page__title--sm">Tit03</p>
                        <p class="page__text">
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="page__tape">
                        <div class="page__tape--dot-col"></div>
                        <div class="page__tape-icon">
                            <img src="{{ asset('img/sleep.png') }}" alt="sleep" width="100%">
                        </div>
                        <div class="page__tape--dot-col"></div>
                    </div>
                    <div class="page__content-advantage">
                        <p class="page__title--sm">Tit04</p>
                        <p class="page__text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
    </div>
</div>
@endsection

