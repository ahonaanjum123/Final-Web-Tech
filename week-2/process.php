<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = $_POST['applicant_id'];

    $name = $_POST['full_name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $pass = $_POST['password'];

    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

    $job = $_POST['job_position'];

    $qual = $_POST['qualification'];

    $addr = $_POST['address'];
 
    $err = "";
 
    if (empty($id)) {

        $err .= "Applicant ID is required.<br>";

    }

    if (empty($name)) {

        $err .= "Name is required.<br>";

    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {

        $err .= "Email is required.<br>";

    }

    if (empty($phone) || strlen($phone) != 11) {

        $err .= "Phone number is required.<br>";

    }

    if (empty($pass) || strlen($pass) < 6) {

        $err .= "Password is required.<br>";

    }

    if (empty($gender)) {

        $err .= "Please select your gender.<br>";

    }

    if (empty($job)) {

        $err .= "Please select a job position.<br>";

    }

    if (empty($qual)) {

        $err .= "Qualification is required.<br>";

    }

    if (empty($addr)) {

        $err .= "Address is required.<br>";

    }
 
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {

        $file_name = $_FILES['cv']['name'];

        $file_tmp = $_FILES['cv']['tmp_name'];

        $file_size = $_FILES['cv']['size'];

        $ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
 
        if ($ext != 'pdf' && $ext != 'doc' && $ext != 'docx') {

            $err .= "Invalid file format.<br>";

        }

        if ($file_size > 2097152) {

            $err .= "File size exceeds 2 MB.<br>";

        }
 
        if ($err == "") {

            if (!is_dir('uploads')) {

                mkdir('uploads', 0777, true);

            }

            move_uploaded_file($file_tmp, "uploads/" . $file_name);

        }

    } else {

        $err .= "Please upload your CV.<br>";

    }
 
    if ($err != "") {

        echo "<h3>Application Failed!</h3>";

        echo $err;

        echo "<br><a href='index.php'>Go Back</a>";

    } else {

        $queryParams = http_build_query([

            'id' => $id,

            'name' => $name,

            'email' => $email,

            'phone' => $phone,

            'gender' => $gender,

            'job' => $job,

            'qual' => $qual,

            'addr' => $addr,

            'cv' => $file_name

        ]);

        header("Location: result.php?$queryParams");

        exit();

    }

}

?>
 