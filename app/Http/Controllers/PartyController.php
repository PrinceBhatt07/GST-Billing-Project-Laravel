<?php

namespace App\Http\Controllers;

use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('party.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('party.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validateData = Validator::make($request->all(),[
                "party_type" => "required|in:parties,clients,vendors,employees",
                "full_name" => "required",
                "phone_no" => "required|numeric|digits:10",
                "address" => "required",
                "account_holder_name" => "required",
                "account_no" => "required|numeric",
                "bank_name" => "required",
                "ifsc_code" => "required",
                "branch_address" => "required"
            ]);

            if ($validateData->fails()) {
                return redirect()->back()->withErrors($validateData)->withInput();
            }

            $party = new Party();
            $party->party_type = $request->party_type;
            $party->full_name = $request->full_name;
            $party->phone_no = $request->phone_no;
            $party->save();
            return redirect()->route('party.index')->with('success', 'Party added successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Party $party)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Party $party)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Party $party)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Party $party)
    {
        //
    }
}
