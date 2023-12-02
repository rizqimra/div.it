<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SplitBillMember extends Model
{
    protected $fillable = ['name', 'split_bill_id'];

    public function orders()
    {
        return $this->hasMany(ItemOrder::class);
    }

    public function splitBill()
    {
        return $this->belongsTo(SplitBill::class);
    }
}
