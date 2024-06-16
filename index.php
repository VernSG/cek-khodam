<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Check Khodam</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            width: 400px;
        }
        h2 {
            text-align: center;
        }
        form {
            text-align: center;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        .result {
            margin-top: 20px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Cek Khodam Gratis</h2>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="inputName">Nama:</label>
            <input type="text" id="inputName" name="inputName" required>
            <br>
            <button type="submit">Check Khodam</button>
        </form>

        <div class="result">
            <?php
            // Sisipkan file logika PHP
            require_once 'khodam.php';

            // Proses input dan tampilkan hasil jika form disubmit
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $inputName = isset($_POST['inputName']) ? htmlspecialchars($_POST['inputName']) : '';
                $khodamName = getRandomKhodam();

                echo "<p><strong>Nama:</strong> $inputName</p>";
                echo "<p><strong>Khodam:</strong> $khodamName</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
