<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class customer
 * @package App\Models
 * @version August 30, 2020, 6:44 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property string $firstname
 * @property string $surname
 * @property string $customertype
 * @property string $dateofbirth
 */
class customer extends Model
{

    public $table = 'customer';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'firstname',
        'surname',
        'customertype',
        'dateofbirth'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'firstname' => 'string',
        'surname' => 'string',
        'customertype' => 'string',
        'dateofbirth' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'customerid');
    }
}
