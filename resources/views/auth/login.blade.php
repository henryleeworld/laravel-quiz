@extends('layouts.auth')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center" style="color: white">線上測驗</h1>
            <h3 class="text-center" style="color: white">測試是否具備應有的能力</h3>
            <br />
            <div class="panel panel-default">
                <div class="panel-heading">登入</div>
                <div class="panel-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>哎喲！</strong>輸入的資訊有問題：
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">電子郵件</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">密碼</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember">記住我
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                    登入
                                </button>
                                <a href="{{ route('auth.register') }}"
                                        class="btn btn-default">
                                    註冊
                                </a>
                                <br>
                                <a href="{{ route('auth.password.reset') }}">忘記密碼</a>
                                <br>
                                <br>
                                其他登入方式：
                                <br>
                                <a href="{{ route('oauth2google') }}"
                                        class="btn btn-info">
                                    Google
                                </a>
                                <a href="{{ route('oauth2facebook') }}"
                                        class="btn btn-info">
                                    Facebook
                                </a>
                                <a href="{{ route('oauth2github') }}"
                                        class="btn btn-info">
                                    GitHub
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
