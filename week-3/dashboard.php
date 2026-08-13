<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">

    <h1>Student Dashboard</h1>

    <h2>Session Information :</h2>

    <?php if (isset($_SESSION["student_name"]) && isset($_SESSION["student_id"])) { ?>

        <p>
            <strong>Student Name:</strong>
            <?php echo htmlspecialchars($_SESSION["student_name"]); ?>
        </p>

        <p>
            <strong>Student ID:</strong>
            <?php echo htmlspecialchars($_SESSION["student_id"]); ?>
        </p>

    <?php } else { ?>

        <p class="error">Session data is unavailable.</p>

    <?php } ?>


    <h2>Cookie Information : </h2>

    <?php if (isset($_COOKIE["student_name"])) { ?>

        <p>
            <strong>Student Name stored Cookie:</strong>
            <?php echo htmlspecialchars($_COOKIE["student_name"]); ?>
        </p>

    <?php } else { ?>

        <p class="error">Cookie data is unavailable.</p>

    <?php } ?>


    <div class="buttons">

        <a href="logout.php">
            <button>Remove Session</button>
        </a>

        <a href="remove_cookie.php">
            <button>Remove Cookie</button>
        </a>

        <a href="index.php">
            <button>Back to Registration</button>
        </a>

    </div>

</div>

</body>
</html>