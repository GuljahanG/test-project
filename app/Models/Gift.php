<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gift extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'user_id',
        'gift_id',
    ];

    public function childrens()
    {
        return $this->hasMany(Gift::class, 'gift_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Gift::class, 'gift_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
