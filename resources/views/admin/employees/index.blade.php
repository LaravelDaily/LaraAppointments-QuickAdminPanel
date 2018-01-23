@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.employees.title')</h3>
    @can('employee_create')
    <p>
        <a href="{{ route('admin.employees.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($employees) > 0 ? 'datatable' : '' }} @can('employee_delete') dt-select @endcan">
                <thead>
                    <tr>
                        @can('employee_delete')
                            <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                        @endcan

                        <th>@lang('quickadmin.employees.fields.first-name')</th>
                        <th>@lang('quickadmin.employees.fields.last-name')</th>
                        <th>@lang('quickadmin.employees.fields.phone')</th>
                        <th>@lang('quickadmin.employees.fields.email')</th>
						<th>@lang('quickadmin.employees.fields.services')</th>
                        <th>&nbsp;</th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($employees) > 0)
                        @foreach ($employees as $employee)
                            <tr data-entry-id="{{ $employee->id }}">
                                @can('employee_delete')
                                    <td></td>
                                @endcan

                                <td>{{ $employee->first_name }}</td>
                                <td>{{ $employee->last_name }}</td>
                                <td>{{ $employee->phone }}</td>
                                <td>{{ $employee->email }}</td>
								<td>
								@foreach($employee->services as $service)
								<span class="label label-success">{{ $service->name }}</span>
								@endforeach
								</td>								
                                <td>
                                    @can('employee_view')
                                    <a href="{{ route('admin.employees.show',[$employee->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('employee_edit')
                                    <a href="{{ route('admin.employees.edit',[$employee->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('employee_delete')
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.employees.destroy', $employee->id])) !!}
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
        @can('employee_delete')
            window.route_mass_crud_entries_destroy = '{{ route('admin.employees.mass_destroy') }}';
        @endcan

    </script>
@endsection