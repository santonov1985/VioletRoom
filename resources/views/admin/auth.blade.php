<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <title>Document</title>
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card-group shadow-lg">
                    <div class="card p-4">
                        <div class="card-body">
                            <form action="{{ route('login') }}" method="post">
                                @csrf

                                <h1>Вход</h1>
                                <p class="text-muted">Для работы в системе, вам необходимо войти используя ваш логин и пароль</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="email" name="email" value="{{ old('email') }}" placeholder="Логин" required>
                                </div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </div>
                                    <input class="form-control" type="password" name="password" placeholder="Пароль" required>
                                </div>
                                <div class="form-group">
                                    @if ($errors->has('email'))
                                        <p class="text-center">{{ $errors->first('email') }}</p>
                                    @endif

                                    @if ($errors->has('password'))
                                        <p class="text-center">{{ $errors->first('password') }}</p>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button class="btn btn-dark px-4" type="submit">Войти</button>
                                    </div>
                                    <div class="col-6 text-right">

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="card text-white bg-light py-5 d-md-down-none" style="width:44%">
                        <div class="card-body text-center">
                            <div class="text-dark">
                                <p>
                                    <img src="{{ asset('/img/sw-logo.png') }}" alt="SilkWayVentures">
                                </p>
                                <h4>INVENTORY SYSTEM</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
