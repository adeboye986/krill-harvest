<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>New Krill Harvest contact message</title>
    </head>
    <body>
        <h1>New contact message</h1>

        <p><strong>Name:</strong> {{ $fullName }}</p>
        <p><strong>Email:</strong> {{ $email }}</p>
        <p><strong>Subject:</strong> {{ $subjectLabel }}</p>

        <h2>Message</h2>
        <p>{!! nl2br(e($messageBody)) !!}</p>
    </body>
</html>
