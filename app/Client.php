<?php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Client
 *
 * @package App
 * @property string $first_name
 * @property string $last_name
 * @property string $phone
 * @property string $email
*/
class Client extends Model
{
    use SoftDeletes;

    protected $fillable = ['first_name', 'last_name', 'phone', 'email'];
    
    
}
