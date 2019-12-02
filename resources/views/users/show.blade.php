@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('cruds.user.title')</h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.view')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr><th>@lang('cruds.user.fields.name')</th>
                    <td>{{ $user->name }}</td></tr><tr><th>@lang('cruds.user.fields.email')</th>
                    <td>{{ $user->email }}</td></tr><tr><th>@lang('cruds.user.fields.password')</th>
                    <td>---</td></tr><tr><th>@lang('cruds.user.fields.role')</th>
                    <td>{{ $user->role->title or '' }}</td></tr><tr><th>@lang('cruds.user.fields.remember-token')</th>
                    <td>{{ $user->remember_token }}</td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('users.index') }}" class="btn btn-default">@lang('global.back_to_list')</a>
        </div>
    </div>
@stop