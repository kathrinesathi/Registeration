<?php
// session_start();
include_once('new.php');
// if(isset($_POST['login'])) {
$e = $_POST['email'];
$p = $_POST['password'];

if(empty($e) || empty($p)) {
echo "All field are required";
} else {
$query = $conn->prepare("SELECT email, password FROM reg WHERE 
email=email AND password=password ");
$query->execute(array($e,$p));
$row = $query->fetch(PDO::FETCH_BOTH);
echo "login successful";
if($query->rowCount() > 0) {
//   $_SESSION['username'] = $user;
  header('location:home.php');
  echo "login successfully";
} else {
  echo"Username/Password is wrong";
}
}

?>
