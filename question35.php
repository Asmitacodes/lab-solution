<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Interest Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .form-container, .result-container {
            max-width: 400px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        input, button {
            width: calc(100% - 20px);
            margin: 10px 0;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: white;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Simple Interest Calculator</h2>
        <form method="POST">
            <input type="number" name="principal" placeholder="Enter Principal Amount" step="0.01" required>
            <input type="number" name="rate" placeholder="Enter Rate of Interest (%)" step="0.01" required>
            <input type="number" name="time" placeholder="Enter Time (in years)" step="0.01" required>
            <button type="submit">Calculate Interest</button>
        </form>
    </div>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <?php
        $principal = $_POST['principal'];
        $rate = $_POST['rate'];
        $time = $_POST['time'];
        $simpleInterest = ($principal * $rate * $time) / 100;
        ?>
        <div class="result-container">
            <h2>Calculation Result</h2>
            <p><strong>Principal Amount:</strong> $<?= number_format($principal, 2) ?></p>
            <p><strong>Rate of Interest:</strong> <?= number_format($rate, 2) ?>%</p>
            <p><strong>Time:</strong> <?= number_format($time, 2) ?> years</p>
            <p><strong>Simple Interest:</strong> $<?= number_format($simpleInterest, 2) ?></p>
        </div>
    <?php endif; ?>
</body>
</html>
