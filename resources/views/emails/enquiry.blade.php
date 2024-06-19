<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">
<div class="max-w-2xl mx-auto p-8 space-y-4">
    <h1 class="text-2xl font-bold mb-6">New Enquiry Submitted</h1>
    <p class="mb-4"><strong>Client Type:</strong> {{ $enquiry->client_type }}</p>
    <p class="mb-4"><strong>First Name:</strong> {{ $enquiry->first_name }}</p>
    <p class="mb-4"><strong>Last Name:</strong> {{ $enquiry->last_name }}</p>
    <p class="mb-4"><strong>Email:</strong> {{ $enquiry->email }}</p>
    <p class="mb-4"><strong>Phone Number:</strong> {{ $enquiry->phone_number }}</p>
    <p class="mb-4"><strong>Type of Matter:</strong> {{ $enquiry->type_of_matter }}</p>
    <p class="mb-4"><strong>Find Us:</strong> {{ $enquiry->find_us }}</p>
    <p class="mb-4"><strong>Preferred Contact Time:</strong> {{ $enquiry->preferred_contact_time }}</p>
</div>
</body>
</html>
