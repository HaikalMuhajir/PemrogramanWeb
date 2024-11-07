<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Rank and Predicate</title>
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
            text-align: left;
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
    <h2>Grades and Predicates</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $grades = $_POST['grades'];
        $grades = trim($grades); // Remove extra spaces
        $grades = filter_var($grades, FILTER_SANITIZE_STRING); // Sanitize input
        
        $gradesArray = explode(',', $grades);
        $validGrades = true;
        $numericGradesArray = [];

        // Check if all values are valid numbers
        foreach ($gradesArray as $grade) {
            $grade = trim($grade); // Trim spaces
            if (is_numeric($grade)) {
                $numericGradesArray[] = floatval($grade); // Convert to float
            } else {
                $validGrades = false;
                break;
            }
        }

        if ($validGrades) {
            rsort($numericGradesArray); // Sort grades descending
            
            // Function to get predicate based on grade
            function getPredicate($grade) {
                switch (true) {
                    case $grade >= 90:
                        return 'A';
                    case $grade >= 80:
                        return 'B';
                    case $grade >= 70:
                        return 'C';
                    case $grade >= 60:
                        return 'D';
                    default:
                        return 'E';
                }
            }
            

            echo "<div class='result'>Grades and Predicates:<br>";
            foreach ($numericGradesArray as $rank => $grade) {
                echo "Rank " . ($rank + 1) . ": Grade $grade - Predicate " . getPredicate($grade) . "<br>";
            }
            echo "</div>";
        } else {
            echo "<div class='error'>Please enter valid numeric grades separated by commas.</div>";
        }
    }
    ?>

    <form method="POST">
        <label>Enter Grades (comma-separated):</label>
        <input type="text" name="grades" placeholder="e.g., 85,90,78" required>
        <input type="submit" value="Calculate">
    </form>
</div>
</body>
</html>
