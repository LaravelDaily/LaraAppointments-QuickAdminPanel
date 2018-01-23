<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAppointmentsRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'client_id' => 'required',
            'employee_id' => 'required',
			'service_id' => 'required',
			'date' => 'required',
            'starting_hour' => 'required',
			'starting_minute' => 'required',
			'finish_hour' => 'required',
			'finish_minute' => 'required',
        ];
    }
}
