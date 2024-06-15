<x-section>
    <x-h type="h2" class="">Submit an Enquiry</x-h>
    <x-p>
        We appreciate you taking the time to get in touch with us. Here’s what happens next:
    </x-p>
    <x-ol>
        <li class="mb-2"><strong>Submission Confirmation:</strong><br>You will receive a confirmation email shortly to
            acknowledge that we have received your enquiry.
        </li>
        <li class="mb-2"><strong>Review:</strong><br> Our team will carefully review the details you’ve provided. This
            helps us understand your needs better and prepare any necessary information or documentation.
        </li>
        <li class="mb-2"><strong>Contact:</strong><br> One of our team members will reach out to you regarding your proposed matter at your preferred contact time.
        </li>
        <li class="mb-2"><strong>Follow-Up:</strong><br> In case you need immediate assistance, please feel free to
            contact us directly at <a class="text-blue-700" href="tel:0412585884">0412 585 884</a> or <a
                class="text-blue-700" href="mailto:tina@landona.com.au">tina@landona.com.au</a>.
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
        <div class="space-y-2">
            <x-label for="client_type">Are you?</x-label>
            <x-select id="client_type" name="client_type" required>
                <option value="New Client" selected>New Client</option>
                <option value="Returning Client">Returning Client</option>
            </x-select>
        </div>

        <div class="space-y-2">
            <x-label for="first_name">First Name</x-label>
            <x-input type="text" id="first_name" name="first_name" required/>
        </div>

        <div class="space-y-2">
            <x-label for="last_name">Last Name</x-label>
            <x-input type="text" id="last_name" name="last_name" required/>
        </div>

        <div class="space-y-2">

        </div>
        <x-label for="email">Email</x-label>
        <x-input type="email" id="email" name="email" required/>

        <x-label for="phone_number">Phone Number</x-label>
        <x-input type="text" id="phone_number" name="phone_number" required/>

        <x-label for="type_of_matter">Type of Matter</x-label>
        <x-select id="type_of_matter" name="type_of_matter" required>
            <option value="Proposed Sale">Proposed Sale</option>
            <option value="Proposed Purchase">Proposed Purchase</option>
            <option value="Transferring">Transferring</option>
            <option value="Justice of the Peace">Justice of the Peace</option>
            <option value="Register a Covenant">Register a Covenant</option>
        </x-select>

        <x-label for="preferred_contact_time" class="block text-sm font-medium text-gray-700">Preferred Contact Time</x-label>
        <x-input type="text" id="preferred_contact_time" name="preferred_contact_time" placeholder="Select Time..."/>

        <x-label for="find_us">How did you find us?</x-label>
        <x-select id="find_us" name="find_us">
            <option value="Google">Google</option>
            <option value="Word of Mouth">Word of Mouth</option>
            <option value="Real Estate Agent">Real Estate Agent</option>
            <option value="Buyers Agent">Buyers Agent</option>
            <option value="Social Media">Social Media</option>
            <option value="Other">Other</option>
        </x-select>

        <div class="text-center lg:text-left">
            <button
                class="inline-flex items-center px-6 py-2 rounded-full border-2 border-[#ff7f00] hover:bg-[#ff7f00] hover:text-white bg-white text-[#ff7f00] disabled:opacity-25 transition ease-in-out duration-150 font-medium"
                type="submit">Submit Enquiry
            </button>
        </div>
    </form>
</x-section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const now = new Date();
        const currentHour = now.getHours();
        let minDate = new Date();
        let minTimeToday = "09:00";

        // Check if current time is after 5 PM
        if (currentHour >= 17) {
            minDate.setDate(minDate.getDate() + 1);
            // If tomorrow is a weekend, set minDate to next Monday
            if (minDate.getDay() === 0) {
                minDate.setDate(minDate.getDate() + 1);
            } else if (minDate.getDay() === 6) {
                minDate.setDate(minDate.getDate() + 2);
            }
            minTimeToday = "09:00"; // Set default time to 9 AM for the next day
        } else if (currentHour >= 9 && currentHour < 17) {
            minTimeToday = currentHour + ":00";
        }

        const maxDate = new Date(minDate);
        maxDate.setDate(minDate.getDate() + 14);

        flatpickr("#preferred_contact_time", {
            enableTime: true,
            dateFormat: "l, d F Y at H:i K",
            minDate: minDate,
            maxDate: maxDate,
            defaultDate: minDate,
            defaultHour: 9,
            defaultMinute: 0,
            disable: [
                function(date) {
                    // Disable weekends
                    return (date.getDay() === 0 || date.getDay() === 6);
                }
            ],
            time_24hr: false, // 12-hour format
            minuteIncrement: 30,
            onChange: function(selectedDates, dateStr, instance) {
                const selectedDate = selectedDates[0];
                if (selectedDate && selectedDate.toDateString() === now.toDateString()) {
                    instance.set('minTime', minTimeToday);
                    instance.set('maxTime', "17:00");
                } else {
                    instance.set('minTime', "09:00");
                    instance.set('maxTime', "17:00");
                }

                // Ensure minutes are either :00 or :30
                if (selectedDate) {
                    let minutes = selectedDate.getMinutes();
                    if (minutes !== 0 && minutes !== 30) {
                        let adjustedMinutes = (minutes < 15) ? 0 : 30;
                        selectedDate.setMinutes(adjustedMinutes);
                        instance.setDate(selectedDate, true); // Update the flatpickr instance
                    }
                }
            }
        });
    });
</script>






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


