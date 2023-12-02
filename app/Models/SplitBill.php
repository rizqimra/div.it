<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SplitBill extends Model
{
    protected $fillable = ['total_members', 'tax_percentage'];

    public function members()
    {
        return $this->hasMany(SplitBillMember::class);
    }
}
