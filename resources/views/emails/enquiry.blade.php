<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-6">
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
    <h1 class="text-2xl font-bold mb-6">New Enquiry Submitted</h1>
    <div class="mb-4">
        <p><strong>Client Type:</strong> {{ $enquiry->client_type }}</p>
    </div>
    <div class="mb-4">
        <p><strong>First Name:</strong> {{ $enquiry->first_name }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Last Name:</strong> {{ $enquiry->last_name }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Email:</strong> {{ $enquiry->email }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Phone Number:</strong> {{ $enquiry->phone_number }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Type of Matter:</strong> {{ $enquiry->type_of_matter }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Find Us:</strong> {{ $enquiry->find_us }}</p>
    </div>
    <div class="mb-4">
        <p><strong>Preferred Contact Time:</strong> {{ $enquiry->preferred_contact_time }}</p>
    </div>
</div>
</body>
</html>
