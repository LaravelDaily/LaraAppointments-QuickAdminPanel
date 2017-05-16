<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class WorkingHour
 *
 * @package App
 * @property string $employee
 * @property string $date
 * @property time $start_time
 * @property time $finish_time
*/
class WorkingHour extends Model
{
    use SoftDeletes;

    protected $fillable = ['date', 'start_time', 'finish_time', 'employee_id'];
    

    /**
     * Set to null if empty
     * @param $input
     */
    public function setEmployeeIdAttribute($input)
    {
        $this->attributes['employee_id'] = $input ? $input : null;
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setDateAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['date'] = Carbon::createFromFormat(config('app.date_format'), $input)->format('Y-m-d');
        } else {
            $this->attributes['date'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getDateAttribute($input)
    {
        $zeroDate = str_replace(['Y', 'm', 'd'], ['0000', '00', '00'], config('app.date_format'));

        if ($input != $zeroDate && $input != null) {
            return Carbon::createFromFormat('Y-m-d', $input)->format(config('app.date_format'));
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setStartTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['start_time'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['start_time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getStartTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }

    /**
     * Set attribute to date format
     * @param $input
     */
    public function setFinishTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            $this->attributes['finish_time'] = Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            $this->attributes['finish_time'] = null;
        }
    }

    /**
     * Get attribute from date format
     * @param $input
     *
     * @return string
     */
    public function getFinishTimeAttribute($input)
    {
        if ($input != null && $input != '') {
            return Carbon::createFromFormat('H:i:s', $input)->format('H:i:s');
        } else {
            return '';
        }
    }
    
    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id')->withTrashed();
    }
    
}
