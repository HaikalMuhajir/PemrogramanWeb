<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Average Grade</title>
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
        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Average Grade Calculator</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $grades = $_POST['grades']; 
        $grades = trim($grades); // Step 1: Trim extra spaces
        $grades = filter_var($grades, FILTER_SANITIZE_STRING); // Step 2: Sanitize input to remove unwanted characters

        // Step 3: Convert the grades string into an array
        $gradesArray = explode(',', $grades);

        $validGrades = true; // To check if all inputs are valid numbers
        $numericGradesArray = [];

        // Step 4: Loop through each grade, trim spaces and check if it's numeric
        foreach ($gradesArray as $grade) {
            $grade = trim($grade);
            if (is_numeric($grade)) {
                $numericGradesArray[] = (float) $grade; // Convert valid grades to floats
            } else {
                $validGrades = false;
                break;
            }
        }

        // Step 5: If all grades are valid, calculate the average
        if ($validGrades) {
            $sum = array_sum($numericGradesArray);
            $average = $sum / count($numericGradesArray);
            echo "<div class='result'>Average Grade: " . number_format($average, 2) . "</div>";
        } else {
            // Step 6: Display an error if any invalid input is detected
            echo "<div class='error'>Please enter only numeric grades separated by commas.</div>";
        }
    }
    ?>

    <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <label for="text">Enter Grades (comma-separated):</label>
        <input type="text" name="grades" placeholder="e.g., 85,90,78" required>
        <input type="submit" value="Calculate Average">
    </form>
</div>
</body>
</html>
