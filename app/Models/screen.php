<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class screen
 * @package App\Models
 * @version August 30, 2020, 6:47 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property integer $size
 * @property boolean $imax
 */
class screen extends Model
{

    public $table = 'screen';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'size',
        'imax'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'size' => 'integer',
        'imax' => 'boolean'
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
        return $this->hasMany(\App\Models\Booking::class, 'screenid');
    }
}
