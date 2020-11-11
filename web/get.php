<!-- insert data into form  -->
<?php
/* (user 'root' with no password) */
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
<html>
<head>
</head>

<body>
<div id="center_button">
    <button onclick="location.href='index.html'">Back to Home</button>
</div>
</body>
</html>