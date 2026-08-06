<?php
$id = $_GET['id'] ?? '';
$name = $_GET['name'] ?? '';
$email = $_GET['email'] ?? '';
$phone = $_GET['phone'] ?? '';
$gender = $_GET['gender'] ?? '';
$job = $_GET['job'] ?? '';
$qual = $_GET['qual'] ?? '';
$addr = $_GET['addr'] ?? '';
$cv = $_GET['cv'] ?? '';
 
$req_id = $_REQUEST['id'] ?? '';
$req_name = $_REQUEST['name'] ?? '';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>
    <h3></h3>
    <h3> APPLICATION SUCCESSFUL</h3>
    <h3></h3>
    <p>Applicant ID: <?php echo $id; ?></p>
    <p>Name: <?php echo $name; ?></p>
    <p>Email: <?php echo $email; ?></p>
    <p>Phone: <?php echo $phone; ?></p>
    <p>Gender: <?php echo $gender; ?></p>
    <p>Job Position: <?php echo $job; ?></p>
    <p>Qualification: <?php echo $qual; ?></p>
    <p>Address: <?php echo $addr; ?></p>
    <p>Uploaded CV: <?php echo $cv; ?></p>
    <p>Applicant ID: <?php echo $req_id; ?></p>
    <p>Applicant Name: <?php echo $req_name; ?></p>
    <p>Application submitted successfully.</p>
</body>
</html>
 
