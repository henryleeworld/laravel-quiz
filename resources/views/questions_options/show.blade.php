@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('cruds.questionsOption.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>@lang('cruds.questionsOption.fields.question')</th>
                    <td>{{ $questions_option->question->question_text or '' }}</td></tr><tr><th>@lang('cruds.questionsOption.fields.option')</th>
                    <td>{{ $questions_option->option }}</td></tr><tr><th>@lang('cruds.questionsOption.fields.correct')</th>
                    <td>{{ $questions_option->correct == 1 ? 'Yes' : 'No' }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('questions_options.index') }}" class="btn btn-default">@lang('global.back_to_list')</a>
        </div>
    </div>
@stop