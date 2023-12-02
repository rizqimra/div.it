<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $fillable = ['name', 'quantity', 'price', 'split_bill_member_id'];

    public function splitBillMember()
    {
        return $this->belongsTo(SplitBillMember::class);
    }
}
