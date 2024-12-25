<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $fullName = htmlspecialchars($_POST['fullName']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);
    $education = htmlspecialchars($_POST['education']);
    $gender = htmlspecialchars($_POST['gender']);
    $dob = htmlspecialchars($_POST['dob']);
    $position = htmlspecialchars($_POST['position']);

    // Map position values to display-friendly names
    $positions = [
        "web_developer" => "Web Developer",
        "data_scientist" => "Data Scientist",
        "digital_marketer" => "Digital Marketer"
    ];
    $positionName = $positions[$position] ?? "Unknown Position";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: #F5DEB3; /* Light tan background for warmth */
        }

        .result-container {
            width: 60%;
            margin: 50px auto;
            padding: 20px;
            background: #ffffff; /* White form container */
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Soft shadow for elegance */
        }

        h2 {
            text-align: center;
            color: #2c3e50; /* Dark neutral color for headings */
            font-size: 32px; /* Larger font size for impact */
            margin-bottom: 40px; /* More space below the heading */
        }

        .details {
            display: grid;
            grid-template-columns: 1fr 2fr; /* Two columns for labels and values */
            row-gap: 15px;
            column-gap: 10px;
            font-size: 18px;
            color: #555; /* Darker text for clarity */
        }

        .details .label {
            font-weight: bold;
            color: #2c3e50; /* Darker tone for emphasis */
        }

        .details .value {
            text-align: left;
        }

        .back-button {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #5a9bd4; /* Soft blue for professional button */
            color: white;
            text-decoration: none;
            text-align: center;
            border-radius: 8px;
            transition: 0.3s ease;
        }

        .back-button:hover {
            background-color: #4778a6; /* Darker blue on hover */
        }
    </style>
</head>
<body>
    <div class="result-container">
        <h2>Application Submitted</h2>
        <div class="details" style="margin-top: 20px;">
            <div class="label">Full Name:</div>
            <div class="value"><?php echo $fullName; ?></div>

            <div class="label">Email:</div>
            <div class="value"><?php echo $email; ?></div>

            <div class="label">Phone Number:</div>
            <div class="value"><?php echo $phone; ?></div>

            <div class="label">Address:</div>
            <div class="value"><?php echo $address; ?></div>

            <div class="label">Highest Education:</div>
            <div class="value"><?php echo $education; ?></div>

            <div class="label">Gender:</div>
            <div class="value"><?php echo ucfirst($gender); ?></div>

            <div class="label">Date of Birth:</div>
            <div class="value"><?php echo $dob; ?></div>

            <div class="label">Position Applied For:</div>
            <div class="value"><?php echo $positionName; ?></div>
        </div>
        <a href="index.html" class="back-button">Back to Form</a>
    </div>
</body>
</html>
