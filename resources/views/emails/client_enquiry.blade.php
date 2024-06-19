<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Enquiry</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="p-6">
<div class="max-w-2xl mx-auto p-8">
    <h1 class="text-2xl font-bold mb-6">Thank You For Your Enquiry, {{ $enquiry->first_name }}</h1>

    <p class="mb-4">Our team will review your {{ $enquiry->type_of_matter }} enquiry and reach out to you with a phone call on {{ $enquiry->preferred_contact_time }}.</p>

    <p class="mb-4">Here are the details you provided:</p>

    <div class="mb-4">
        <p class="mb-4"><strong>Client Type:</strong> {{ $enquiry->client_type }}</p>
        <p class="mb-4"><strong>First Name:</strong> {{ $enquiry->first_name }}</p>
        <p class="mb-4"><strong>Last Name:</strong> {{ $enquiry->last_name }}</p>
        <p class="mb-4"><strong>Email:</strong> {{ $enquiry->email }}</p>
        <p class="mb-4"><strong>Phone Number:</strong> {{ $enquiry->phone_number }}</p>
        <p class="mb-4"><strong>Type of Matter:</strong> {{ $enquiry->type_of_matter }}</p>
        <p class="mb-4"><strong>Source:</strong> {{ $enquiry->find_us }}</p>
        <p class="mb-4"><strong>Preferred Contact Time:</strong> {{ $enquiry->preferred_contact_time }}</p>
    </div>

    <p class="mt-4">Best regards,</p>

    <p>Landona Conveyancing</p>
</div>
</body>
</html>
