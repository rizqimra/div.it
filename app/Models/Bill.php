<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    protected $fillable = ['total_cost', 'total_members'];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
