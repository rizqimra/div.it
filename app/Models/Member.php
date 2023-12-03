<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['name', 'cost', 'detail'];

    public function bill()
    {
        return $this->belongsTo(Bill::class);
    }
}
