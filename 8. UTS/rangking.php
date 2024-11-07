<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Calculator</title>
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
        input[type="text"] {
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
    </style>
</head>
<body>
<div class="container">
    <h2>Grade Calculator</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Mengambil dan menyanitasi input
        $grades = htmlspecialchars(trim($_POST['grades']));
        
        // Mengonversi string nilai menjadi array
        $gradesArray = explode(',', $grades);
        $gradesArray = array_map('floatval', $gradesArray);

        // Menghitung nilai tertinggi dan terendah
        $highest = max($gradesArray);
        $lowest = min($gradesArray);
        rsort($gradesArray); // Mengurutkan nilai secara menurun

        // Menampilkan hasil
        echo "<div class='result'>Highest Grade: $highest<br>";
        echo "Lowest Grade: $lowest<br>";
        echo "Ranking: " . implode(', ', $gradesArray) . "</div>";
    }
    ?>

    <form method="POST">
        <label>Enter Grades (comma-separated):</label>
        <input type="text" name="grades" required>
        <
