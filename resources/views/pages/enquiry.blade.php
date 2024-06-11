<x-app-layout>

    <div class="max-w-3xl mx-auto p-6 mt-10 flex flex-col space-y-8">
        <x-h type="h2" class="text-2xl font-bold text-blue-600 mb-4">Submit an Enquiry</x-h>
        <x-p>
            We appreciate you taking the time to get in touch with us. Here’s what happens next:
        </x-p>
        <x-ol class="list-decimal list-inside text-gray-700 mb-6">
            <li class="mb-2"><strong>Submission Confirmation:</strong> You will receive a confirmation email shortly to acknowledge that we have received your enquiry.</li>
            <li class="mb-2"><strong>Review:</strong> Our team will carefully review the details you’ve provided. This helps us understand your needs better and prepare any necessary information or documentation.</li>
            <li class="mb-2"><strong>Contact:</strong> One of our representatives will reach out to you within the next 24-48 hours. We aim to respond as quickly as possible to address your query and provide the assistance you need.</li>
            <li class="mb-2"><strong>Follow-Up:</strong> In case you need immediate assistance, please feel free to contact us directly at <a href="tel:0412585884">0412 585 884</a> or <a href="mailto:tina@landona.com.au">tina@landona.com.au</a>. We are here to help you!</li>
        </x-ol>
        <x-h class="text-xl font-semibold text-blue-600 mb-2">How to Ensure You Receive Our Response</x-h>
        <x-ul class="list-disc list-inside text-gray-700 mb-6">
            <li class="mb-2"><strong>Check Your Inbox:</strong> Make sure to check your email inbox for the confirmation email. Sometimes, emails may end up in your spam or junk folder, so please check there as well.</li>
            <li class="mb-2"><strong>Save Our Contact Information:</strong> Adding our email address to your contacts can help ensure our response reaches your inbox without any issues.</li>
        </x-ul>
        <x-h2 class="text-xl font-semibold text-blue-600 mb-2">Need Immediate Help?</x-h2>
        <x-p class="text-gray-700 mb-6">
            If you have any urgent concerns or require immediate assistance, don't hesitate to contact us directly at <a href="tel:[contact number]" class="text-blue-500">[contact number]</a> or <a href="mailto:[email address]" class="text-blue-500">[email address]</a>.
        </x-p>
        <x-p class="text-gray-700">
            Thank you for choosing us. We look forward to assisting you!
        </x-p>
    </div>


    <form action="{{ route('enquiries.store') }}" method="POST" class="flex flex-col w-96 mx-auto">
        @csrf
        <label for="client_type">Are you?</label>
        <select id="client_type" name="client_type">
            <option value="Returning Client">Returning Client</option>
            <option value="New Client">New Client</option>
        </select>

        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name">

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name">

        <label for="email">Email</label>
        <input type="email" id="email" name="email">

        <label for="phone_number">Phone Number</label>
        <input type="text" id="phone_number" name="phone_number">

        <label for="type_of_matter">Type of Matter</label>
        <select id="type_of_matter" name="type_of_matter">
            <option value="Proposed Sale">Proposed Sale</option>
            <option value="Proposed Purchase">Proposed Purchase</option>
            <option value="Transferring">Transferring</option>
            <option value="Justice of the Peace">Justice of the Peace</option>
            <option value="Register a Covenant">Register a Covenant</option>
        </select>

        <label for="source">How did you find us?</label>
        <select id="source" name="source">
            <option value="Google">Google</option>
            <option value="Word of Mouth">Word of Mouth</option>
            <option value="Real Estate Agent">Real Estate Agent</option>
            <option value="Buyers Agent">Buyers Agent</option>
            <option value="Social Media">Social Media</option>
            <option value="Other">Other</option>
        </select>

        <button type="submit">Send</button>
    </form>
</x-app-layout>
