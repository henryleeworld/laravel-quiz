@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading">歡迎使用線上題庫系統，以下是有關系統的一些數字。</div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1>{{ $questions }}</h1>
                            資料庫中的問題數
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $users }}</h1>
                            已註冊使用者數
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ $quizzes }}</h1>
                            已測驗次數
                        </div>
                        <div class="col-md-3 text-center">
                            <h1>{{ number_format($average, 2) }} / 10</h1>
                            平均分數
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{ route('tests.index') }}" class="btn btn-success">開始新的測驗！</a>
        </div>
    </div>
@endsection
