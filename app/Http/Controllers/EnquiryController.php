<?php

namespace App\Http\Controllers;

use App\Mail\ClientEnquiryMail;
use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use App\Services\Staff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    protected $staff;

    public function __construct(Staff $staff)
    {
        $this->staff = $staff;
    }

    public function create()
    {
        $timeslots = \App\Models\Enquiry::generateTimeslots();

        return view('pages/enquiry/create', compact('timeslots'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_type' => 'required|string|in:Returning Client,New Client',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'type_of_matter' => 'required|string|in:Proposed Sale,Proposed Purchase,Transferring,Justice of the Peace,Register a Covenant',
            'find_us' => 'required|string|in:Google,Word of Mouth,Real Estate Agent,Buyers Agent,Social Media,Other',
            'preferred_contact_time' => 'required|string|max:60',
        ]);

        $enquiry = Enquiry::create($request->all());

        Mail::to($this->staff->getEmails())->send(new EnquiryMail($enquiry));

        Mail::to($enquiry->email)->send(new ClientEnquiryMail($enquiry));

        return redirect()->route('enquiries.create')->with('success', 'Enquiry submitted successfully!');
    }
}
