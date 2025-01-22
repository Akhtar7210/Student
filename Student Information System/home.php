<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="styles.css">
    </head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(70, 138, 240);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            padding: 20px;
            background: #58b1c5c9;
            border-radius: 70px;
            box-shadow: 12px 16px 6px 11px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .container h2 {
            margin-top: 0;
            font-size: 28px;
            color: #333;
        }
        .container p {
            font-size: 18px;
            color: #555;
        }
        .logout-button {
            margin-top: 20px;
            padding: 10px 20px;
            font-size: 18px;
            color: #fff;
            background-color: #dc3545;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .logout-button:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome </h1>
    </header>

    <div class="container">
        <h2>Hello, User!</h2>
        <p>Welcome to your homepage. Here you can manage your profile, check updates, and more.</p>
        <h1>Student Information System</h1>
    <form id="studentForm" action="connect.php" method="post">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="student_id">Student ID:</label>
        <input type="Number" id="student_id" name="student_id" required><br>

        <label for="roll_number">Roll Number:</label>
        <input type="number" id="roll_number" name="roll_number" required><br>

        <label for="department">Year:</label>
        <input type="number" id="department" name="department" required><br>

        <label for="course">Course:</label>
        <input type="text" id="course" name="course" required><br>

        <label for="semester">Semester:</label>
        <input type="number" id="semester" name="semester" required><br>

        <label for="mobile_number">Mobile Number:</label>
        <input type="number" id="mobile_number" name="mobile_number" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="photo">Photo Upload:</label>
        <input type="file" id="photo" name="photo" required><br>

        <label for="document">Document Upload:</label>
        <input type="file" id="document" name="document" required><br>

        <label for="aadhaar">Aadhaar Upload:</label>
        <input type="file" id="aadhaar" name="aadhaar" required><br>

        <input type="submit" value="Submit">
    </form>

    <div id="studentDisplay">
        <h2>Student Information Display</h2>
        <div id="studentInfo"></div>
        <img id="photoPreview" alt="Photo Preview" style="width: 100px; display: none;">
        <div id="documentPreview"></div>
        <div id="aadhaarPreview"></div>
        <button id="printButton" style="display: none;" onclick="printStudentInfo()">Print</button>
    </div>
        <form action="logout.php" method="post">
            <button type="submit" class="logout-button">Logout</button>
        </form>
    </div>
    <script src="scripts.js"></script>
</body>
</html>
