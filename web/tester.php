<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<body>

<?php
/*  (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "nordlid");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$fname = mysqli_real_escape_string($link, $_REQUEST['fname']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);
$tlf = mysqli_real_escape_string($link, $_REQUEST['tlf']);
 
// Attempt insert query execution
$sql = "INSERT INTO brugere (fname, email, tlf) VALUES ('$fname', '$email', '$tlf')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>

<form action="tester.php" method="post">
    <p>
        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname">
    </p>
    <p>
        <label for="email">Last Name:</label>
        <input type="text" name="email" id="email">
    </p>
    <p>
        <label for="tlf">tlf:</label>
        <input type="number" name="tlf" id="tlf">
    </p>
    <input type="submit" value="Submit">
</form>

</body>
</html>