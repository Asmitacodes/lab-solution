<!DOCTYPE html>
<html>
<head>
    <title>Student Mark Sheet</title>
    <style>
        /* General styles for the page */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f4f4f4;
        }

        h3 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #333;
            color: white;
        }

        /* Pass/Fail result styling */
        .pass {
            background-color: green;
            color: white;
        }

        .fail {
            background-color: red;
            color: white;
        }

        /* Alternate row styling for "Alternate color" table */
        .alternate-row:nth-child(even) {
            background-color: #ccc;
        }

        .alternate-row:nth-child(odd) {
            background-color: #333;
            color: white;
        }
    </style>
</head>
<body>
<?php
// Multidimensional array storing student data
$students = [
    ["sn" => 1, "name" => "Rajesh", "roll" => 23, "webtech" => 85, "dbms" => 57, "economics" => 64, "dsa" => 94, "account" => 98],
    ["sn" => 2, "name" => "Aryan", "roll" => 24, "webtech" => 78, "dbms" => 53, "economics" => 57, "dsa" => 84, "account" => 90],
    ["sn" => 3, "name" => "Gita", "roll" => 26, "webtech" => 88, "dbms" => 60, "economics" => 50, "dsa" => 77, "account" => 89],
    ["sn" => 4, "name" => "Sita", "roll" => 56, "webtech" => 65, "dbms" => 59, "economics" => 57, "dsa" => 24, "account" => 98],
    ["sn" => 5, "name" => "Anita", "roll" => 31, "webtech" => 70, "dbms" => 48, "economics" => 65, "dsa" => 74, "account" => 85],
    ["sn" => 6, "name" => "Sunil", "roll" => 32, "webtech" => 92, "dbms" => 54, "economics" => 73, "dsa" => 88, "account" => 95],
    ["sn" => 7, "name" => "Rita", "roll" => 33, "webtech" => 50, "dbms" => 40, "economics" => 44, "dsa" => 34, "account" => 30],
    ["sn" => 8, "name" => "Kamal", "roll" => 34, "webtech" => 89, "dbms" => 61, "economics" => 72, "dsa" => 80, "account" => 86],
];

// Function to calculate total marks and result
function calculateResult($marks) {
    $total = $marks["webtech"] + $marks["dbms"] + $marks["economics"] + $marks["dsa"] + $marks["account"];
    $result = $total >= 250 ? "Pass" : "Fail"; // Pass if total >= 250, otherwise Fail
    return ["total" => $total, "result" => $result];
}

// Display Mark Ledger
echo "<h3>Mark Ledger</h3>";
echo "<table>";
echo "<tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Web Tech II</th>
        <th>DBMS</th>
        <th>Economics</th>
        <th>DSA</th>
        <th>Account</th>
        <th>Total</th>
        <th>Result</th>
    </tr>";

foreach ($students as $student) {
    $resultData = calculateResult($student);
    $total = $resultData["total"];
    $result = $resultData["result"];
    $resultClass = $result === "Pass" ? "pass" : "fail";

    echo "<tr>
            <td>{$student['sn']}</td>
            <td>{$student['name']}</td>
            <td>{$student['roll']}</td>
            <td>{$student['webtech']}</td>
            <td>{$student['dbms']}</td>
            <td>{$student['economics']}</td>
            <td>{$student['dsa']}</td>
            <td>{$student['account']}</td>
            <td>$total</td>
            <td class='$resultClass'>$result</td>
        </tr>";
}
echo "</table>";

// Display Alternate Color Table
echo "<h3>Alternate color</h3>";
echo "<table>";
echo "<tr>
        <th>SN</th>
        <th>Name</th>
        <th>Roll</th>
        <th>Web Tech II</th>
        <th>DBMS</th>
        <th>Economics</th>
        <th>DSA</th>
        <th>Account</th>
        <th>Total</th>
        <th>Result</th>
    </tr>";

foreach ($students as $index => $student) {
    $resultData = calculateResult($student);
    $total = $resultData["total"];
    $result = $resultData["result"];
    $resultClass = $result === "Pass" ? "pass" : "fail";

    echo "<tr class='alternate-row'>
            <td>{$student['sn']}</td>
            <td>{$student['name']}</td>
            <td>{$student['roll']}</td>
            <td>{$student['webtech']}</td>
            <td>{$student['dbms']}</td>
            <td>{$student['economics']}</td>
            <td>{$student['dsa']}</td>
            <td>{$student['account']}</td>
            <td>$total</td>
            <td class='$resultClass'>$result</td>
        </tr>";
}
echo "</table>";
?>
</body>
</html>
