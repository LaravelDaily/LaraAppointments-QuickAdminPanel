@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.appointments.title')</h3>
    @can('appointment_create')
        <p>
            <a href="{{ route('admin.appointments.create') }}"
               class="btn btn-success">@lang('quickadmin.qa_add_new')</a>

        </p>
    @endcan

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <div id='calendar'></div>

    <br />

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($appointments) > 0 ? 'datatable' : '' }} @can('appointment_delete') dt-select @endcan">
                <thead>
                <tr>
                    @can('appointment_delete')
                        <th style="text-align:center;"><input type="checkbox" id="select-all"/></th>
                    @endcan

                    <th>@lang('quickadmin.appointments.fields.client')</th>
                    <th>@lang('quickadmin.clients.fields.last-name')</th>
                    <th>@lang('quickadmin.clients.fields.phone')</th>
                    <th>@lang('quickadmin.clients.fields.email')</th>
                    <th>@lang('quickadmin.appointments.fields.employee')</th>
                    <th>@lang('quickadmin.employees.fields.last-name')</th>
                    <th>@lang('quickadmin.appointments.fields.start-time')</th>
                    <th>@lang('quickadmin.appointments.fields.finish-time')</th>
                    <th>@lang('quickadmin.appointments.fields.comments')</th>
                    <th>&nbsp;</th>
                </tr>
                </thead>

                <tbody>
                @if (count($appointments) > 0)
                    @foreach ($appointments as $appointment)
                        <tr data-entry-id="{{ $appointment->id }}">
                            @can('appointment_delete')
                                <td></td>
                            @endcan

                            <td>{{ $appointment->client->first_name or '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->last_name : '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->phone : '' }}</td>
                            <td>{{ isset($appointment->client) ? $appointment->client->email : '' }}</td>
                            <td>{{ $appointment->employee->first_name or '' }}</td>
                            <td>{{ isset($appointment->employee) ? $appointment->employee->last_name : '' }}</td>
                            <td>{{ $appointment->start_time }}</td>
                            <td>{{ $appointment->finish_time }}</td>
                            <td>{!! $appointment->comments !!}</td>
                            <td>
                                @can('appointment_view')
                                    <a href="{{ route('admin.appointments.show',[$appointment->id]) }}"
                                       class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                @endcan
                                @can('appointment_edit')
                                    <a href="{{ route('admin.appointments.edit',[$appointment->id]) }}"
                                       class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                @endcan
                                @can('appointment_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.appointments.destroy', $appointment->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="9">@lang('quickadmin.qa_no_entries_in_table')</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        @can('appointment_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.appointments.mass_destroy') }}';
        @endcan

    </script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                        @foreach($appointments as $appointment)
                    {
                        title : '{{ $appointment->client->first_name . ' ' . $appointment->client->last_name }}',
                        start : '{{ $appointment->start_time }}',
                        @if ($appointment->finish_time)
                                end: '{{ $appointment->finish_time }}',
                        @endif
                        url : '{{ route('admin.appointments.edit', $appointment->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection