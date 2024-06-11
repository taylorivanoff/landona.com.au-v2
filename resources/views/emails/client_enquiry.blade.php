<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-4">Thank You for Your Enquiry, {{ $enquiry->first_name }}!</h1>
    <p class="mb-4">We have received your enquiry and our team will review it shortly. Here are the details you provided:</p>
    <div class="mb-4">
        <p><strong class="font-semibold">Client Type:</strong> {{ $enquiry->client_type }}</p>
        <p><strong class="font-semibold">First Name:</strong> {{ $enquiry->first_name }}</p>
        <p><strong class="font-semibold">Last Name:</strong> {{ $enquiry->last_name }}</p>
        <p><strong class="font-semibold">Email:</strong> {{ $enquiry->email }}</p>
        <p><strong class="font-semibold">Phone Number:</strong> {{ $enquiry->phone_number }}</p>
        <p><strong class="font-semibold">Type of Matter:</strong> {{ $enquiry->type_of_matter }}</p>
        <p><strong class="font-semibold">Source:</strong> {{ $enquiry->find_us }}</p>
        <p><strong class="font-semibold">Preferred Contact Time:</strong> {{ $enquiry->preferred_contact_time }}</p>
    </div>
    <p class="mb-4">We will contact you within the next 24-48 hours. If you need immediate assistance, please reach out to us at <a class="text-blue-700 underline" href="mailto:tina@landona.com.au">tina@landona.com.au</a> or <a class="text-blue-700 underline" href="tel:0412585884">0412 585 884</a>.</p>
    <p>Thank you for choosing us!</p>
    <p class="mt-4">Best regards,</p>
    <p class="font-semibold">Landona Conveyancing</p>
</div>
</body>
</html>
