<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Image Upload</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        input[type="file"] {
            display: none;
        }

        label {
            display: inline-block;
            padding: 10px 20px;
            background-color: #6a11cb;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin-bottom: 20px;
            transition: background-color 0.3s;
        }

        label:hover {
            background-color: #2575fc;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #218838;
        }

        .message {
            margin-top: 20px;
            padding: 10px;
            border-radius: 5px;
            font-weight: bold;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        img {
            margin-top: 20px;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Upload Profile Image</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="profileImage">Choose Profile Image (PNG, JPEG | Max: 500 KB)</label>
            <input type="file" name="profileImage" id="profileImage" required>
            <button type="submit">Upload</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $file = $_FILES['profileImage'];

            // File validation
            $allowedTypes = ['image/png', 'image/jpeg'];
            $maxSize = 500 * 1024; // 500 KB

            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileSize = $file['size'];
            $fileTmpName = $file['tmp_name'];
            $uploadDir = "uploads/";

            if (!in_array($fileType, $allowedTypes)) {
                echo "<div class='message error'>Invalid file type. Only PNG and JPEG are allowed.</div>";
            } elseif ($fileSize > $maxSize) {
                echo "<div class='message error'>File size exceeds 500 KB. Please upload a smaller file.</div>";
            } else {
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir, 0777, true);
                }

                $destination = $uploadDir . basename($fileName);
                if (move_uploaded_file($fileTmpName, $destination)) {
                    echo "<div class='message success'>Image uploaded successfully!</div>";
                    echo "<img src='$destination' alt='Uploaded Profile Image'>";
                } else {
                    echo "<div class='message error'>Error uploading the file. Please try again.</div>";
                }
            }
        }
        ?>
    </div>
</body>
</html>
