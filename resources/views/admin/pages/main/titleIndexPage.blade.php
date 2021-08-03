@extends('admin.layouts.app')

@section('content')

    @include('alerts.error-alert')
    @include('alerts.message-alert')

    <div class="card shadow-sm">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <h4 class="card-title mb-0">Заголовок:</h4>
                </div>

                <div class="btn-toolbar">
                    <a href="{{ route('main-index') }}" class="btn btn-light" title="Назад">
                        <i class="fa fa-chevron-left"></i>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-4">
                    <form action="{{ route('main-index-title-update', ['id' => $titles->id]) }}" method="post">
                        @csrf
                        <div class="form-group">
                            <textarea type="text" name="title" class="form-control" rows="7" required>{{ $titles->title }}</textarea>
                        </div>

                        <div class="form-group pt-3">
                            <button type="submit" class="btn btn-dark">Сохранить</button>
                            <a href="{{ route('main-index') }}" class="btn btn-light">Отмена</a>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
@endsection


