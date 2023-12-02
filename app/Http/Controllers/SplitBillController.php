<?php

namespace App\Http\Controllers;

use App\SplitBill;
use App\SplitBillMember;
use App\ItemOrder;
use Illuminate\Http\Request;

class SplitBillController extends Controller
{
    public function create()
    {
        return view('split-bill.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'total_members' => 'required|integer|min:1',
            'tax_percentage' => 'required|numeric|min:0',
            'members.*.name' => 'required|string',
            'members.*.orders.*.name' => 'required|string',
            'members.*.orders.*.quantity' => 'required|integer|min:1',
            'members.*.orders.*.price' => 'required|numeric|min:0',
        ]);

        $splitBill = SplitBill::create([
            'total_members' => $request->input('total_members'),
            'tax_percentage' => $request->input('tax_percentage'),
        ]);

        foreach ($request->input('members') as $memberData) {
            $member = $splitBill->members()->create(['name' => $memberData['name']]);

            foreach ($memberData['orders'] as $orderData) {
                $member->orders()->create($orderData);
            }
        }

        return redirect()->route('split-bill.create')->with('success', 'Split Bill berhasil dihitung!');
    }
}
