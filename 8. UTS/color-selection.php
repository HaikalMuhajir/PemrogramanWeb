<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Color</title>
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
            text-align: center;
        }
        h2 {
            color: #333333;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            color: #555555;
        }
        input[type="color"] {
            width: 100px;
            height: 40px;
            border-radius: 5px;
            border: 1px solid #dddddd;
            margin-bottom: 20px;
        }
        input[type="submit"] {
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
            margin-top: 20px;
            font-size: 18px;
        }
        .error {
            color: red;
            margin-top: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Select a Color</h2>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $color = $_POST['color']; 
        // Sanitasi input untuk menghindari serangan injeksi
        $color = filter_var($color, FILTER_SANITIZE_STRING);

        // Validasi apakah input adalah warna heksadesimal yang valid
        if (preg_match('/^#[a-f0-9]{6}$/i', $color)) {
            echo "<p class='result' style='color: $color;'>Selected Color: $color</p>";
        } else {
            echo "<p class='error'>Invalid color format. Please select a valid color.</p>";
        }
    }
    ?>

    <!-- Form untuk memilih warna -->
    <form method="POST">
        <label>Choose a Color: 
            <input type="color" name="color" value="#000000">
        </label><br>
        <input type="submit" value="Select Color">
    </form>
</div>

</body>
</html>
