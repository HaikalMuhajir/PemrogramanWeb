<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leap Year Checker</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            color: #333333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #555555;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #dddddd;
            margin-bottom: 20px;
            font-size: 16px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #333333;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Leap Year Checker</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $year = (int)$_POST['year'];
        
        // Validasi input agar hanya tahun positif yang diproses
        if ($year > 0) {
            if (($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0)) {
                echo "<div class='result'>$year is a Leap Year.</div>";
            } else {
                echo "<div class='result'>$year is not a Leap Year.</div>";
            }
        } else {
            echo "<div class='error'>Please enter a valid positive year.</div>";
        }
    }
    ?>

    <form method="POST">
        <label>Enter Year:</label>
        <input type="number" name="year" required min="1">
        <input type="submit" value="Check Leap Year">
    </form>
</div>
</body>
</html>
