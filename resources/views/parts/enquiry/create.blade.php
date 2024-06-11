<x-section>
    <x-h type="h2" class="">Submit an Enquiry</x-h>
    <x-p>
        We appreciate you taking the time to get in touch with us. Here’s what happens next:
    </x-p>
    <x-ol>
        <li class="mb-2"><strong>Submission Confirmation:</strong> You will receive a confirmation email shortly to
            acknowledge that we have received your enquiry.
        </li>
        <li class="mb-2"><strong>Review:</strong> Our team will carefully review the details you’ve provided. This
            helps us understand your needs better and prepare any necessary information or documentation.
        </li>
        <li class="mb-2"><strong>Contact:</strong> One of our representatives will reach out to you within the next
            24-48 hours. We aim to respond as quickly as possible to address your query and provide the assistance
            you need.
        </li>
        <li class="mb-2"><strong>Follow-Up:</strong> In case you need immediate assistance, please feel free to
            contact us directly at <a class="text-blue-700" href="tel:0412585884">0412 585 884</a> or <a
                class="text-blue-700" href="mailto:tina@landona.com.au">tina@landona.com.au</a>. We are here to help
            you!
        </li>
    </x-ol>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @elseif (session('error'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('error') }}</span>
        </div>
    @endif

    @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('enquiries.store') }}" method="POST" class="space-y-4">
        @csrf
        <x-label for="client_type">Are you?</x-label>
        <x-select id="client_type" name="client_type">
            <option value="New Client" selected>New Client</option>
            <option value="Returning Client">Returning Client</option>
        </x-select>

        <x-label for="first_name">First Name</x-label>
        <x-input type="text" id="first_name" name="first_name"/>

        <x-label for="last_name">Last Name</x-label>
        <x-input type="text" id="last_name" name="last_name"/>

        <x-label for="email">Email</x-label>
        <x-input type="email" id="email" name="email"/>

        <x-label for="phone_number">Phone Number</x-label>
        <x-input type="text" id="phone_number" name="phone_number"/>

        <x-label for="type_of_matter">Type of Matter</x-label>
        <x-select id="type_of_matter" name="type_of_matter">
            <option value="Proposed Sale">Proposed Sale</option>
            <option value="Proposed Purchase">Proposed Purchase</option>
            <option value="Transferring">Transferring</option>
            <option value="Justice of the Peace">Justice of the Peace</option>
            <option value="Register a Covenant">Register a Covenant</option>
        </x-select>

        <x-label for="find_us">How did you find us?</x-label>
        <x-select id="find_us" name="find_us">
            <option value="Google">Google</option>
            <option value="Word of Mouth">Word of Mouth</option>
            <option value="Real Estate Agent">Real Estate Agent</option>
            <option value="Buyers Agent">Buyers Agent</option>
            <option value="Social Media">Social Media</option>
            <option value="Other">Other</option>
        </x-select>

        <x-label for="preferred_contact_time" class="form-label">Preferred Contact Time</x-label>
        <x-select name="preferred_contact_time" class="form-select" id="preferred_contact_time">
            <option value="09:00 AM">09:00 AM</option>
            <option value="09:30 AM">09:30 AM</option>
            <option value="10:00 AM">10:00 AM</option>
            <option value="10:30 AM">10:30 AM</option>
            <option value="11:00 AM">11:00 AM</option>
            <option value="11:30 AM">11:30 AM</option>
            <option value="12:00 PM">12:00 PM</option>
            <option value="12:30 PM">12:30 PM</option>
            <option value="01:00 PM">01:00 PM</option>
            <option value="01:30 PM">01:30 PM</option>
            <option value="02:00 PM">02:00 PM</option>
            <option value="02:30 PM">02:30 PM</option>
            <option value="03:00 PM">03:00 PM</option>
            <option value="03:30 PM">03:30 PM</option>
            <option value="04:00 PM">04:00 PM</option>
            <option value="04:30 PM">04:30 PM</option>
            <option value="05:00 PM">05:00 PM</option>
        </x-select>

        <div class="text-center lg:text-left">
            <button
                class="inline-flex items-center px-6 py-2 rounded-full border-2 border-[#ff7f00] hover:bg-[#ff7f00] hover:text-white bg-white text-[#ff7f00] disabled:opacity-25 transition ease-in-out duration-150 font-medium"
                type="submit">Submit Enquiry
            </button>
        </div>
    </form>
</x-section>
<x-section>
    <x-h type="h2" class="font-semibold text-blue-600 mb-2">How to Ensure You Receive Our Response</x-h>
    <x-ul>
        <li class="mb-2"><strong>Check Your Inbox:</strong> Make sure to check your email inbox for the confirmation
            email. Sometimes, emails may end up in your spam or junk folder, so please check there as well.
        </li>
        <li class="mb-2"><strong>Save Our Contact Information:</strong> Adding our email address to your contacts
            can help ensure our response reaches your inbox without any issues.
        </li>
    </x-ul>
</x-section>
<x-section>
    <x-h type="h2" class="font-semibold text-blue-600 mb-2">Need Immediate Help?</x-h>
    <x-p class="text-gray-700 mb-6">
        If you have any urgent concerns or require immediate assistance, don't hesitate to contact us directly at <a
            class="text-blue-700" href="tel:0412585884">0412 585 884</a> or <a
            class="text-blue-700" href="mailto:tina@landona.com.au">tina@landona.com.au</a>.
    </x-p>
    <x-p class="text-gray-700">
        Thank you for choosing us. We look forward to assisting you!
    </x-p>
</x-section>


