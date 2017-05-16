@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.working-hours.title')</h3>
    @can('working_hour_create')
    <p>
        <a href="{{ route('admin.working_hours.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.css' />

    <div id='calendar'></div>

@stop

@section('javascript')
    <script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.1.0/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                defaultView: 'agendaWeek',
                events : [
                    @foreach($working_hours as $hour)
                    {
                        title : '{{ $hour->employee->first_name . ' ' . $hour->employee->last_name }}',
                        start : '{{ $hour->date . ' ' . $hour->start_time }}',
                        end : '{{ $hour->date . ' ' . $hour->finish_time }}',
                        url : '{{ route('admin.working_hours.edit', $hour->id) }}'
                    },
                    @endforeach
                ]
            })
        });
    </script>
@endsection