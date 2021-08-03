@extends('admin.layouts.app')

@section('content')

    @include('alerts.error-alert')
    @include('alerts.message-alert')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h4 class="card-title mb-0">Слайдер:</h4>
                </div>

                <div class="btn-toolbar">
                    <a href="{{ route('main-index') }}" class="btn btn-light" title="Назад">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <form action="{{ route('main-index-store-slider') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <div class="col-md-6">
                                <h6><strong>Изображение слайдера</strong></h6>
{{--                                <div class="rounded"><img src="{{ $user->photo ?? '/img/slider/slider-default.jpg' }}"  style="height: 235px" alt="picture"></div>--}}
                                <div class="form-group mt-3">
                                    <input type="file" name="image" id="image" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 mt-5">
                                <label for="title"><strong>Заголовок слайдера</strong></label>
                                <input type="text" name="title" class="form-control"required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 mt-5">
                                <button type="submit" class="btn btn-dark">Сохранить</button>
                                <a href="{{ route('main-index') }}" class="btn btn-light">Отмена</a>
                            </div>
                        </div>

                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


