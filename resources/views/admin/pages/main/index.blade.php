@extends('admin.layouts.app')

@include('alerts.error-alert')
@include('alerts.message-alert')

@section('content')
    <div class="container-fluid">
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="d-flex justify-content-between">--}}
{{--                            <div>--}}
{{--                                <h4 class="card-title mb-0">Главная страница</h4>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

        <section class="content">
            {{--SLIDER--}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Слайдер</h5>
                </div>

                <div class="card-body">
                    <a href="{{ route('main-index-create-slider') }}" class="btn btn-info mb-4">
                        Добавить элемент
                    </a>

                    <div class="c-chart-wrapper mt-3">
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            @foreach($sliders as $slider)
                            <tbody>
                            <tr>
                                <td class="text-left">
                                    <div class="rounded"><img src="{{ $slider->img ?? '/img/slider/slider-default.jpg' }}"  style="height: 80px" alt="picture"></div>
                                </td>
                                <td>
                                    <div><strong>{{ $slider->img }}</strong></div>
                                    <div class="small text-muted"> <strong>Дата добавления</strong> | {{ $slider->created_at }}</div>
                                </td>
                                <td>
                                    <div>{{ $slider->title }}</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <a href="#" class="btn btn-warning btn-sm btn-restore" title="Редактировать">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Удалить">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
            {{-- /SLIDER --}}

            {{-- TITLE --}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Заголовок</h5>
                </div>
                <div class="card-body">
                    @foreach($titles as $title)
                    <div class="form-group">
                        <input type="text" name="title" value="{{ $title->title }}" class="form-control" disabled>
                    </div>
                    <div class="form-group float-right">
                        <a href="{{ route('main-index-title-edit', ['id' => $title->id]) }}" class="btn btn-info" title="Редактировать">Редактировать</a>
                    </div>
                    @endforeach
                </div>
            </div>
            {{-- /TITLE --}}

            {{-- TAPE--}}
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Лента</h5>
                </div>

                <div class="card-body">
                    <a href="#" class="btn btn-info mb-4">
                        Добавить элемент
                    </a>

                    <div class="c-chart-wrapper mt-3">
                        <table class="table table-responsive-sm table-hover table-outline mb-0">
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="rounded"><img src="/img/value.png"  style="height: 80px" alt="picture"></div>
                                </td>
                                <td>
                                    <div><strong>There should be a feed title here</strong></div>
                                    <div class="small text-muted"> <strong>Дата добавления</strong> | 23 Июль  1999</div>
                                </td>
                                <td>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <a href="#" class="btn btn-warning btn-sm" title="Редактировать">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Удалить">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="rounded"><img src="/img/value.png"  style="height: 80px" alt="picture"></div>
                                </td>
                                <td>
                                    <div><strong>There should be a feed title here</strong></div>
                                    <div class="small text-muted"> <strong>Дата добавления</strong> | 23 Июль  1999</div>
                                </td>
                                <td>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <a href="#" class="btn btn-warning btn-sm" title="Редактировать">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Удалить">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="rounded"><img src="/img/value.png"  style="height: 80px" alt="picture"></div>
                                </td>
                                <td>
                                    <div><strong>There should be a feed title here</strong></div>
                                    <div class="small text-muted"> <strong>Дата добавления</strong> | 23 Июль  1999</div>
                                </td>
                                <td>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <a href="#" class="btn btn-warning btn-sm" title="Редактировать">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Удалить">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            <tbody>
                            <tr>
                                <td class="text-center">
                                    <div class="rounded"><img src="/img/value.png"  style="height: 80px" alt="picture"></div>
                                </td>
                                <td>
                                    <div><strong>There should be a feed title here</strong></div>
                                    <div class="small text-muted"> <strong>Дата добавления</strong> | 23 Июль  1999</div>
                                </td>
                                <td>
                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.</div>
                                </td>
                                <td class="text-right" width="10%">
                                    <a href="#" class="btn btn-warning btn-sm" title="Редактировать">
                                        <i class="fa fa-cog"></i>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm btn-delete" title="Удалить">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
            {{-- /TAPE--}}
        </section>





        </div>
    </div>
@endsection
