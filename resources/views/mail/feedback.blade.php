<!-- resources/views/mail/feedback.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Email</title>
</head>
<body>
    <h1>Thank you for your feedback</h1>
    <p>We have received your feedback submission. Here are the details:</p>
    <p><strong>Name:</strong> {{ $name }}</p>
    <p><strong>Email:</strong> {{ $email }}</p>
    <p><strong>Comment:</strong> {{ $comment }}</p>
</body>
</html>
