<?php

namespace App\Http\Controllers;

use App\Mail\ClientEnquiryMail;
use App\Mail\EnquiryMail;
use App\Models\Enquiry;
use App\Models\Matter;
use App\Models\Purchase;
use App\Models\Sale;
use App\Models\User;
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
        return view('models.enquiry.create');
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

        // Find existing user by email or create a new one without a password
        $user = User::firstOrCreate(
            ['email' => $request->email],
            [
                'name' => $request->first_name . $request->last_name,
            ]
        );

        // Create Enquiry
        $enquiry = Enquiry::create(array_merge($request->all(), ['user_id' => $user->id]));

        // Create Matter
        $matter = Matter::create([
            'user_id' => $user->id,
            'enquiry_id' => $enquiry->id,
            'type' => $request->type_of_matter,
        ]);

        // Create Purchase or Sale based on type_of_matter
        if ($request->type_of_matter === 'Proposed Purchase') {
            Purchase::create(['matter_id' => $matter->id]);
        } elseif ($request->type_of_matter === 'Proposed Sale') {
            Sale::create(['matter_id' => $matter->id]);
        }

        // Send emails
        Mail::to($this->staff->getEmails())->send(new EnquiryMail($enquiry));
        Mail::to($enquiry->email)->send(new ClientEnquiryMail($enquiry));

        return redirect()->route('enquiries.create')->with('success', 'Enquiry submitted successfully!');
    }}
