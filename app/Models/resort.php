<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class resort extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'image',
        'mobile',
        'address',
        'email',
    ];
    public function getImageAttribute($value): ?string
    {
        if($value)
            return asset('storage/'. $value);

        return null;
    }
}
