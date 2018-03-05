<?php
session_start();

//  User input email address & password
$emailAddressInput = $_POST['emailAddress'];
$passwordInput = $_POST['password'];

//  MySQL database server name, username, password & dbname
$db_servername = "localhost";
$db_username = "root";
$db_password = "root";
$db_dbname = "supfile_db";

//  MySQLi build connect & test 1
$conn = new mysqli($db_servername, $db_username,$db_password, $db_dbname);
if ($conn->connect_error) {
  echo "Failed";
  die("Failed: " . $conn->connect_error);
}/* else {
  echo "Success";
}*/

/*  MySQLi build connect & test 2
$con = mysqli_connect($db_servername, $db_username, $db_password, $db_dbname);
if (mysqli_connect_errno()) {
  echo "Failed";
} else {
  echo "Success";
}
*/

/*  PDO build connect & test
try {
  $conn = new PDO("mysql:host=$db_servername;dbname=$db_dbname", $db_username, $db_password);
  echo "Success";
} catch (PDOException $e) {
  echo $e->getMessage();
}
*/

//  User input email address & password test and search in db
$sql = "SELECT * FROM user_list WHERE email_address='$emailAddressInput' AND password='$passwordInput'";
$result = $conn->query($sql);
if ($result->num_rows >= 1) {
  $_SESSION['isLogged'] = true;
  $_SESSION['emailAddress'] = $emailAddressInput;
  echo "<script>alert('Login Success!');</script>";
  echo "<script>window.location.href='personal-SUPFile.html'</script>";
} else {
  echo "<script>alert('Did not find this user or Password error!');</script>";
  echo "<script>window.location.href='login.html'</script>";
}

$conn->close();
?>