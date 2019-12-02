@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('cruds.question.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>@lang('cruds.question.fields.topic')</th>
                    <td>{{ $question->topic->title or '' }}</td></tr><tr><th>@lang('cruds.question.fields.question_text')</th>
                    <td>{!! $question->question_text !!}</td></tr><tr><th>@lang('cruds.question.fields.code_snippet')</th>
                    <td>{!! $question->code_snippet !!}</td></tr><tr><th>@lang('cruds.question.fields.answer_explanation')</th>
                    <td>{!! $question->answer_explanation !!}</td></tr><tr><th>@lang('cruds.question.fields.more_info_link')</th>
                    <td>{{ $question->more_info_link }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions.index') }}" class="btn btn-default">@lang('global.back_to_list')</a>
        </div>
    </div>
@stop