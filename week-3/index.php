<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">
    <h1>Student Registration Form</h1>

    <form action="submit.php" method="POST">

        <label>Student Name:</label>
        <input type="text" name="student_name" required>

        <label>Student ID:</label>
        <input type="text" name="student_id" required>

        <label>Email:</label>
        <input type="email" name="email" required>

        <label>Department:</label>
        <select name="department" required>
            <option value="">Select Department</option>
            <option value="CSE">CSE</option>
            <option value="EEE">EEE</option>
            <option value="BBA">BBA</option>
            <option value="Architecture">Architecture</option>
        </select>

        <button type="submit">Submit</button>

    </form>
</div>

</body>
</html>