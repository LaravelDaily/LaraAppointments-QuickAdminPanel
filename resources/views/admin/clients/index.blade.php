@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.clients.title')</h3>
    @can('client_create')
    <p>
        <a href="{{ route('admin.clients.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($clients) > 0 ? 'datatable' : '' }} @can('client_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('client_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.clients.fields.first-name')</th>
                        <th>@lang('quickadmin.clients.fields.last-name')</th>
                        <th>@lang('quickadmin.clients.fields.phone')</th>
                        <th>@lang('quickadmin.clients.fields.email')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($clients) > 0)
                        @foreach ($clients as $client)
                            <tr data-entry-id="{{ $client->id }}">
                                @can('client_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $client->first_name }}</td>
                                <td>{{ $client->last_name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>
                                    @can('client_view')
                                    <a href="{{ route('admin.clients.show',[$client->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('client_edit')
                                    <a href="{{ route('admin.clients.edit',[$client->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('client_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.clients.destroy', $client->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="8">@lang('quickadmin.qa_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('client_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.clients.mass_destroy') }}';
        @endcan

    </script>
@endsection