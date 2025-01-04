<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Sheet</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form, .result { max-width: 400px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; }
        h2 { text-align: center; }
        input, button { width: calc(100% - 20px); margin: 10px 0; padding: 10px; border: 1px solid #ddd; border-radius: 5px; }
        table { width: 100%; border-collapse: collapse; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: center; }
        .success { color: green; font-weight: bold; }
        .fail { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form">
        <h2>Enter Marks</h2>
        <form method="POST">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="text" name="rollno" placeholder="Roll Number" required>
            <input type="number" name="subject1" placeholder="Subject 1 Marks" min="0" max="100" required>
            <input type="number" name="subject2" placeholder="Subject 2 Marks" min="0" max="100" required>
            <input type="number" name="subject3" placeholder="Subject 3 Marks" min="0" max="100" required>
            <input type="number" name="subject4" placeholder="Subject 4 Marks" min="0" max="100" required>
            <input type="number" name="subject5" placeholder="Subject 5 Marks" min="0" max="100" required>
            <button type="submit">Generate Mark Sheet</button>
        </form>
    </div>

    <?php if ($_SERVER["REQUEST_METHOD"] === "POST"): ?>
        <?php
        $name = $_POST['name'];
        $rollno = $_POST['rollno'];
        $marks = [
            'Subject 1' => $_POST['subject1'],
            'Subject 2' => $_POST['subject2'],
            'Subject 3' => $_POST['subject3'],
            'Subject 4' => $_POST['subject4'],
            'Subject 5' => $_POST['subject5'],
        ];
        $total = array_sum($marks);
        $percentage = $total / count($marks);
        $result = $percentage >= 40 ? 'Pass' : 'Fail';
        $resultClass = $result === 'Pass' ? 'success' : 'fail';
        ?>
        <div class="result">
            <h2>Mark Sheet</h2>
            <table>
                <tr><th>Name</th><td><?= $name ?></td></tr>
                <tr><th>Roll No</th><td><?= $rollno ?></td></tr>
                <tr><th>Total Marks</th><td><?= $total ?></td></tr>
                <tr><th>Percentage</th><td><?= number_format($percentage, 2) ?>%</td></tr>
                <tr><th>Result</th><td class="<?= $resultClass ?>"><?= $result ?></td></tr>
            </table>
        </div>
    <?php endif; ?>
</body>
</html>
