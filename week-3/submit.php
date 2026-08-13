<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $student_name = $_POST["student_name"];
    $student_id= $_POST["student_id"];
    $email= $_POST["email"];
    $department = $_POST["department"];
    $_SESSION["student_name"] = $student_name;
    $_SESSION["student_id"] = $student_id;

    setcookie("student_name", $student_name, time() + 3600, "/");
    header("Location: dashboard.php");
    exit();
}
?>