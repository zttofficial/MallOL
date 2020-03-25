<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'po_number',
        'completed_at',
        'total_price',
        'user_id',
    ];
    
    
    protected $dates = [
        'created_at',
    ];

    const UPDATED_AT = null;
    
    protected $appends = ['resource_url'];

    /* ************************ ACCESSOR ************************* */

    public function getResourceUrlAttribute()
    {
        return url('/admin/orders/'.$this->getKey());
    }
}
