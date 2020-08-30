<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class booking
 * @package App\Models
 * @version August 30, 2020, 6:50 pm UTC
 *
 * @property \App\Models\Customer $customerid
 * @property \App\Models\Screen $screenid
 * @property string $bookingdate
 * @property time $starttime
 * @property time $endtime
 * @property integer $customerid
 * @property integer $screenid
 * @property number $fee
 * @property string $seattype
 * @property integer $seats
 * @property integer $tickets
 */
class booking extends Model
{

    public $table = 'booking';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'bookingdate',
        'starttime',
        'endtime',
        'customerid',
        'screenid',
        'fee',
        'seattype',
        'seats',
        'tickets'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'bookingdate' => 'date',
        'customerid' => 'integer',
        'screenid' => 'integer',
        'fee' => 'decimal:2',
        'seattype' => 'string',
        'seats' => 'integer',
        'tickets' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function customerid()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'customerid');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function screenid()
    {
        return $this->belongsTo(\App\Models\Screen::class, 'screenid');
    }
}
