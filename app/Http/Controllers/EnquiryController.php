<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;

class EnquiryController extends Controller
{
    public function create()
    {
        return view('pages/enquiry');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_type' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:255',
            'type_of_matter' => 'required|string|max:255',
            'source' => 'required|string|max:255',
        ]);

        Enquiry::create($request->all());

        return redirect()->route('enquiries.create')->with('success', 'Enquiry submitted successfully!');
    }
}
