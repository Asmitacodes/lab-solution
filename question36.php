<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tax Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 800px;
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

        form label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input, select, button {
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table th, table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        table th {
            background-color: #007BFF;
            color: white;
        }

        .result {
            margin-top: 20px;
            font-weight: bold;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Tax Calculator</h2>
        <form method="POST">
            <label for="income">Annual Income:</label>
            <input type="number" name="income" id="income" step="0.01" required>

            <label for="marital_status">Marital Status:</label>
            <select name="marital_status" id="marital_status" required>
                <option value="married">Married</option>
                <option value="unmarried">Unmarried</option>
            </select>

            <label for="gender">Gender:</label>
            <select name="gender" id="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>

            <button type="submit">Calculate Tax</button>
        </form>

        <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
            <?php
            $income = $_POST['income'];
            $marital_status = $_POST['marital_status'];
            $gender = $_POST['gender'];
            $tax = 0;

            // Calculate tax based on marital status
            if ($marital_status === 'married') {
                if ($income <= 450000) $tax = $income * 0.01;
                elseif ($income <= 550000) $tax = 4500 + ($income - 450000) * 0.10;
                elseif ($income <= 750000) $tax = 14500 + ($income - 550000) * 0.20;
                elseif ($income <= 1300000) $tax = 54500 + ($income - 750000) * 0.30;
                else $tax = 219500 + ($income - 1300000) * 0.35;
            } elseif ($marital_status === 'unmarried') {
                if ($income <= 400000) $tax = $income * 0.01;
                elseif ($income <= 500000) $tax = 4000 + ($income - 400000) * 0.10;
                elseif ($income <= 750000) $tax = 14000 + ($income - 500000) * 0.20;
                elseif ($income <= 1300000) $tax = 64000 + ($income - 750000) * 0.30;
                else $tax = 229000 + ($income - 1300000) * 0.35;
            }

            // Apply gender-based discount
            if ($gender === 'female') {
                $tax *= 0.90; // 10% discount
            }
            ?>
            <div class="result">
                <h3>Tax Calculation Result</h3>
                <p><strong>Annual Income:</strong> $<?= number_format($income, 2) ?></p>
                <p><strong>Marital Status:</strong> <?= ucfirst($marital_status) ?></p>
                <p><strong>Gender:</strong> <?= ucfirst($gender) ?></p>
                <p><strong>Calculated Tax:</strong> $<?= number_format($tax, 2) ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
