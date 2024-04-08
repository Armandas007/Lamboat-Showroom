<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
            text-align: center;
            padding: 50px;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-color: #087b7a;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thank You!</h2>
    <p>Your submission has been received. We appreciate your feedback.</p>
</div>

</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $data = "Name: $name\nEmail: $email\nMessage: $message\n\n";

    $file_path = "form_submissions.txt";

    file_put_contents($file_path, $data, FILE_APPEND | LOCK_EX);
}
?>
