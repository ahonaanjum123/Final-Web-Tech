<?php
setcookie("student_name", "", time() - 3600, "/");

header("Location: dashboard.php");
exit();

?>