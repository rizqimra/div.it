<?php

namespace App\Http\Controllers;

use App\Models\Bill;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BillController extends Controller
{
    public function create()
    {
        return view('split-bill.hitung_bill');
    }

    public function store(Request $request)
    {
        // Validate the request data as needed
        $request->validate([
            'total_cost' => 'required|numeric',
            'total_members' => 'required|integer|min:1',
            'members.*.name' => 'required|string',
        ]);

        $bill = Bill::create($request->only(['total_cost', 'total_members']));

        foreach ($request->members as $memberData) {
            $bill->members()->create(['name' => $memberData['name']]);
        }

        return redirect()->route('create')->with('success', 'Bill created successfully!');
    }

    public function editMember()
    {
        return view('split-bill.editmember');
    }

    public function calculate($billId)
    {
        // Retrieve the bill with its members
        $bill = Bill::with('members')->findOrFail($billId);

        // Calculate the total number of members
        $totalMembers = $bill->members->count();

        // Check if there are members to calculate the split
        if ($totalMembers > 0) {
            // Calculate the cost per member
            $costPerMember = $bill->total_cost / $totalMembers;

            // Update each member's share
            foreach ($bill->members as $member) {
                $member->update(['share' => $costPerMember]);
            }
        }

        return View::make('split-bill.bill', ['bill' => $bill]);
    }
}
