<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional styles for thank you page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
           background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
            text-align: center;
        }
        .thank-you-icon {
            font-size: 64px;
            color: green;
            margin-bottom: 20px;
            transition: transform 0.3s ease-in-out;
        }
        .thank-you-icon:hover {
            transform: scale(1.1);
        }
        .thank-you-message {
            font-size: 24px;
            margin-bottom: 30px;
       }
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="thank-you-icon">&#10004;</div>
        <div class="thank-you-message">Thank you for our payment!</div>
        <p>Your transaction has been successfully processed.</p>
        <a href="python.html" class="button">Go to Course</a>
    </div>
</body>
</html>
