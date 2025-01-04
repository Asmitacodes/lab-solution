<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Profile Image</title>
    <style>
        /* General body styling */
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(to right, #6a11cb, #2575fc);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }

        /* Container for the form */
        .form-container {
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
            max-width: 500px;
            width: 100%;
            text-align: center;
            color: #333;
        }

        /* Form heading */
        .form-container h2 {
            font-size: 28px;
            margin-bottom: 20px;
            color: #6a11cb;
        }

        /* File input styling */
        .form-container input[type="file"] {
            display: none;
        }

        .form-container label {
            display: inline-block;
            background-color: #6a11cb;
            color: #fff;
            padding: 12px 25px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .form-container label:hover {
            background-color: #2575fc;
        }

        /* Submit button styling */
        .form-container input[type="submit"] {
            background-color: #2575fc;
            color: white;
            padding: 12px 25px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 15px;
        }

        .form-container input[type="submit"]:hover {
            background-color: #6a11cb;
        }

        /* Message styling */
        .message {
            margin-top: 20px;
            font-weight: bold;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }

        .success {
            background-color: #d4edda;
            color: #155724;
        }

        .error {
            background-color: #f8d7da;
            color: #721c24;
        }

        /* Uploaded image preview */
        .image-preview {
            margin-top: 20px;
            border-radius: 10px;
            width: 150px;
            height: 150px;
            object-fit: cover;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Footer style */
        .footer {
            margin-top: 20px;
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Upload Your Profile Image</h2>
        <form method="POST" enctype="multipart/form-data">
            <label for="image">Choose Image (PNG or JPEG, Max 500 KB)</label>
            <input type="file" name="image" id="image" required>
            <input type="submit" value="Upload">
        </form>

        <?php
        // Check if the form has been submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $file = $_FILES['image']; // Get the uploaded file

            // Allowed file types and max file size
            $allowedTypes = ['image/png', 'image/jpeg'];
            $maxSize = 500 * 1024; // 500 KB in bytes

            // File details
            $fileName = $file['name'];
            $fileType = $file['type'];
            $fileSize = $file['size'];
            $fileTmpName = $file['tmp_name'];
            $uploadDir = "profile_images/"; // Directory to save the uploaded file

            // Validate file type
            if (!in_array($fileType, $allowedTypes)) {
                echo "<div class='message error'>Invalid file type. Only PNG and JPEG files are allowed.</div>";
            }
            // Validate file size
            elseif ($fileSize > $maxSize) {
                echo "<div class='message error'>File size exceeds 500 KB. Please upload a smaller file.</div>";
            }
            // Move the uploaded file to the specified directory
            else {
                if (!is_dir($uploadDir)) {
                    mkdir($uploadDir); // Create the profile_images directory if it doesn't exist
                }
                $destination = $uploadDir . basename($fileName);
                if (move_uploaded_file($fileTmpName, $destination)) {
                    echo "<div class='message success'>Image uploaded successfully! <br> File Name: $fileName</div>";
                    echo "<img src='$destination' alt='Profile Image' class='image-preview'>";
                } else {
                    echo "<div class='message error'>There was an error uploading your file. Please try again.</div>";
                }
            }
        }
        ?>
        <div class="footer">© 2025 Profile Upload Service</div>
    </div>
</body>
</html>
