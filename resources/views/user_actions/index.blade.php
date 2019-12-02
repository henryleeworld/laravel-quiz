@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('cruds.userAction.title')</h3>

    <p>
        
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.list')
        </div>

        <div class="panel-body">
            <table class="table table-bordered table-striped {{ count($user_actions) > 0 ? 'datatable' : '' }} ">
                <thead>
                    <tr>
                        
                        <th>@lang('cruds.userAction.fields.user')</th>
                        <th>@lang('cruds.userAction.fields.action')</th>
                        <th>@lang('cruds.userAction.fields.action_model')</th>
                        <th>@lang('cruds.userAction.fields.action_id')</th>
                        
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($user_actions) > 0)
                        @foreach ($user_actions as $user_action)
                            <tr data-entry-id="{{ $user_action->id }}">
                                
                                <td>{{ $user_action->user->name or '' }}</td>
                                <td>{{ $user_action->action }}</td>
                                <td>{{ $user_action->action_model }}</td>
                                <td>{{ $user_action->action_id }}</td>
                                
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4">@lang('global.no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

