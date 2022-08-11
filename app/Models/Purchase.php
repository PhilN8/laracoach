<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;

    protected $primaryKey = 'purchase_id';

    protected $fillable = [
        'first_name',
        'last_name',
        'id_number',
        'tel_number',
        'departure_date',
        'route_id',
        'number_of_seats',
        'total_cost'
    ];

    public function tickets()
    {
        return $this->hasMany(\App\Models\Ticket::class, 'purchase_id');
    }
}
