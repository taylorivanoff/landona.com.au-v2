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

    public function store(Request $request)
    {
        $timeslots = array_merge(...array_values(Enquiry::generateTimeslots()));
        $timeslot_values = array_map(function ($day, $slots) {
            return array_map(function ($slot) use ($day) {
                return $day . ' ' . $slot;
            }, (array)$slots);
        }, array_keys($timeslots), $timeslots);

        $timeslot_values = array_merge(...$timeslot_values);

        $request->validate([
            'client_type' => 'required|string|in:Returning Client,New Client',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone_number' => 'required|string|max:20',
            'type_of_matter' => 'required|string|in:Proposed Sale,Proposed Purchase,Transferring,Justice of the Peace,Register a Covenant',
            'find_us' => 'required|string|in:Google,Word of Mouth,Real Estate Agent,Buyers Agent,Social Media,Other',
            'preferred_contact_time' => 'required|string|in:' . implode(',', $timeslot_values),
        ]);

        $enquiry = Enquiry::create($request->all());

        Mail::to($this->staff->getEmails())->send(new EnquiryMail($enquiry));
        Mail::to($enquiry->email)->send(new ClientEnquiryMail($enquiry));

        return redirect()->route('enquiries.create')->with('success', 'Enquiry submitted successfully!');
    }

    public function create()
    {
        return view('pages/enquiry/create');
    }
}
