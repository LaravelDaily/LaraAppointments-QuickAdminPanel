<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Employee
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
*/
class Employee extends Model
{
    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'phone', 'email'];
    public function services()
    {
        return $this->belongsToMany('App\Service');
    }
	
	public function provides_service($service)
	{
		return $this->services()->where('service_id', $service)->exists();
	}
	
	public function working_hours()
	{
		return $this->hasMany('App\WorkingHour', 'employee_id');
	}
	
	public function is_working($date) {
		return $this->working_hours->where('date', '=', $date)->first();
	}
	
	public function service_info($service)
	{
		return $this->services()->where('service_id', $service)->first();
	}
	
}
