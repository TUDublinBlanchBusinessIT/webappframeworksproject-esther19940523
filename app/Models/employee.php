<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class employee
 * @package App\Models
 * @version August 30, 2020, 3:39 pm UTC
 *
 * @property string $employeetype
 * @property string $firstname
 * @property string $surname
 * @property string $dateofbirth
 */
class employee extends Model
{

    public $table = 'employee';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'employeetype',
        'firstname',
        'surname',
        'dateofbirth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'employeetype' => 'string',
        'firstname' => 'string',
        'surname' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
