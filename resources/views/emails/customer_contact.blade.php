<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Customer Contact Form Submission</title>
</head>

<body>
    <h2>{{ $formData->name }} wants to talk to you. Mail form sayedbilal.com.</h2>

    <p><strong>Name:</strong> {{ $formData->name }}</p>
    <p><strong>Email:</strong> {{ $formData->email }}</p>
    <p><strong>Telephone:</strong> {{ $formData->telephone }}</p>
    <p><strong>Description:</strong> {{ $formData->description }}</p>
</body>

</html>
