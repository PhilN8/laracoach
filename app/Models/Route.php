<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Route extends Model
{
    use HasFactory;

    protected $primaryKey = 'route_id';

    protected $fillable = [
        'departure',
        'destination',
        'cost',
    ];

    // public function scopeFilter($query, array $filters)
    // {
    //     // if ($filters['tag'] ?? false) {
    //     //     $query->where('tags', 'like', '%' . request('tag') . '%');
    //     // }

    //     if ($filters['search'] ?? false) {
    //         $query->where('departure', 'like', '%' . request('search') . '%')
    //             ->orWhere('destination', 'like', '%' . request('search') . '%');
    //         // ->orWhere('description', 'like', '%' . request('search') . '%')
    //     }
    // }
    public function scopeFilter($query, $search)
    {
        // if ($filters['tag'] ?? false) {
        //     $query->where('tags', 'like', '%' . request('tag') . '%');
        // }

        if ($search ?? false) {
            return $query->where('departure', 'like', '%' . request('search') . '%')
                ->orWhere('destination', 'like', '%' . request('search') . '%');
            // ->orWhere('description', 'like', '%' . request('search') . '%')
        }
    }
}
