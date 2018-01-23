@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.appointments.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.appointments.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
					{!! Form::label('client_id', 'Client*', ['class' => 'control-label']) !!}
                    <select id="client_id" name="client_id" class="form-control select2" required>
						<option value="">Please select</option>
						@foreach($clients as $client)
						<option value="{{ $client->id }}" {{ (old("client_id") == $client->id ? "selected":"") }}>{{ $client->first_name }} {{ $client->last_name }}</option>
						@endforeach
					</select>
                    <p class="help-block"></p>
                    @if($errors->has('client_id'))
                        <p class="help-block">
                            {{ $errors->first('client_id') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('service_id', 'Service*', ['class' => 'control-label']) !!}
                    <select id="service_id" name="service_id" class="form-control select2" required>
						<option value="">Please select</option>
						@foreach($services as $service)
							<option value="{{ $service->id }}" data-price="{{ $service->price }}" {{ (old("service_id") == $service->id ? "selected":"") }}>{{ $service->name }}</option>
						@endforeach
					</select>
                    <p class="help-block"></p>
                    @if($errors->has('service_id'))
                        <p class="help-block">
                            {{ $errors->first('service_id') }}
                        </p>
                    @endif
					<input type="hidden" id="price" value="0">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('date', 'Date*', ['class' => 'control-label']) !!}
                    {!! Form::text('date', old('date'), ['class' => 'form-control date', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('date'))
                        <p class="help-block">
                            {{ $errors->first('date') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row" id="start_time" style="display: none;">
                <div class="col-xs-12 form-group">
					{!! Form::label('start_time', 'Start time*', ['class' => 'control-label']) !!}
					<div class="form-inline">
					<select name="starting_hour" id="starting_hour" class="form-control" required style="max-width: 85px;">
						<option value="-1" selected>Please select</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
					</select>
					:
                    <select name="starting_minute" id="starting_minute" class="form-control" required style="max-width: 85px;">
						<option value="-1" selected>Please select</option>
						<option value="00">00</option>
						<option value="15">15</option>
						<option value="30">30</option>
						<option value="45">45</option>
					</select>
					</div>
                </div>
            </div>
            <div class="row" id="finish_time" style="display: none;">
                <div class="col-xs-12 form-group">
					{!! Form::label('finish_time', 'Finish time*', ['class' => 'control-label']) !!}
					<div class="form-inline">
					<select name="finish_hour" id="finish_hour" class="form-control" required style="max-width: 85px;">
						<option value="-1" selected>Please select</option>
						<option value="08">08</option>
						<option value="09">09</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
					</select>
					:
                    <select name="finish_minute" id="finish_minute" class="form-control" required style="max-width: 85px;">
						<option value="-1" selected>Please select</option>
						<option value="00">00</option>
						<option value="15">15</option>
						<option value="30">30</option>
						<option value="45">45</option>
					</select>
					</div>
                </div>
            </div>
			<hr />
			<div id="results" style="display: none;">
			<p class="total_time"><strong>Total time: <span id="time">0</span> hour(s)</strong></p>
			<p class="total_price"><strong>Total price: $<span id="price_total">0</span></strong></p>
			</div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('comments', 'Comments', ['class' => 'control-label']) !!}
                    {!! Form::textarea('comments', old('comments'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('comments'))
                        <p class="help-block">
                            {{ $errors->first('comments') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "HH:mm:ss"
        });
    </script>
	<script>
	$('.date').datepicker({
		autoclose: true,
		dateFormat: "{{ config('app.date_format_js') }}"
	}).datepicker("setDate", "0");
    </script>
	<script>
		$("#service_id").on("change", function() {
			$("#price").val($('option:selected', this).attr('data-price'));
			var date = $("#date").val();
			var service_id = $("#service_id").val();
			UpdateEmployees(service_id, date);
		});
	
		$("#date").change(function() {
			var service_id = $("#service_id").val();
			var date = $("#date").val();
			UpdateEmployees(service_id, date);
		});
		
		$("#starting_hour, #finish_hour, #starting_minute, #finish_minute").on("change", function () {
			CountPrice();		
		});
		
		$('body').on("change", "input[type=radio][name=employee_id]", function() {
			var employee_id = $(this).val();
			var starting_hour = parseInt($(".starting_hour_"+employee_id).text());
			var starting_minute = $(".starting_minute_"+employee_id).text();
			var finish_hour = starting_hour+1;
			if(finish_hour < 10) {
				finish_hour = "0"+finish_hour;
			}
			if(starting_hour < 10) {
				starting_hour = "0"+starting_hour;
			}
			$('#starting_hour option[value='+starting_hour+']').prop('selected','true');
			$('#starting_minute option[value='+starting_minute+']').prop('selected','true');
			$('#finish_hour option[value='+finish_hour+']').prop('selected','true');
			$('#finish_minute option[value='+starting_minute+']').prop('selected','true');
			$("#start_time, #finish_time").show();
			CountPrice();
		});
		
		function CountPrice() {
			var start_hour = parseInt($("#starting_hour").val());
			var start_minutes = parseInt($("#starting_minute").val());
			var finish_hour = parseInt($("#finish_hour").val());
			var finish_minutes = parseInt($("#finish_minute").val());
			var total_hours = (((finish_hour*60+finish_minutes)-(start_hour*60+start_minutes))/60);
			var price = parseFloat($("#price").val());
			$("#price_total").html(price*total_hours);
			$("#time").html(total_hours);
			if(start_hour != -1 && start_minutes != -1 && finish_hour != -1 && finish_minutes != -1) {
				$("#results").show();
			}
		}
		
		function UpdateEmployees(service_id, date)
		{
			if(service_id != "" && date != "") {
				$.ajax({
					url: '{{ url("admin/get-employees") }}',
					type: 'GET',
					headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
					data: {service_id:service_id, date:date},
					success:function(option){
						//alert(option);
						$(".employees").remove();
						$("#date").closest(".row").after(option);
						$("#start_time, #finish_time").hide();
						$("#results").hide();
					}
				});
			}
		}
	</script>

@stop