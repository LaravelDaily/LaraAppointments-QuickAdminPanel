@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.appointments.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.client')</th>
                            <td>{{ $appointment->client->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.last-name')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.phone')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.clients.fields.email')</th>
                            <td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.employee')</th>
                            <td>{{ $appointment->employee->first_name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.employees.fields.last-name')</th>
                            <td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.start-time')</th>
                            <td>{{ $appointment->start_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.finish-time')</th>
                            <td>{{ $appointment->finish_time }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.appointments.fields.comments')</th>
                            <td>{!! $appointment->comments !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.appointments.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop