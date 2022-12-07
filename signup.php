<?php
$showAlert = false;
$showError = false;
$exists = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  include 'config.php';

  $user_name = $_SESSION['user_name'] ?? '';
  $password = $_SESSION['user_psd'] ?? '';
  $email=  $_SESSION['user_email'] ?? '';
  $username='';
  $password ='';
  $email = '';
  if (isset($_POST['newusername'])) {
    $username = $_POST['newusername'];
  }

  if (isset($_POST['newpassword'])) {
    $password = $_POST["newpassword"];
  }
  if (isset($_POST['newemail'])) {
    $email = $_POST["newemail"];
  }

 
  $sql = "Select * from users where username='$username'";

  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);


  if ($num == 0) {

    if (($password == $password) && $exists == false) {
      
      $hash = password_hash(
        $password,
        PASSWORD_DEFAULT
      );
      $password = password_hash($_POST['newpassword'], PASSWORD_DEFAULT);
      
      $insertQuery="INSERT INTO users VALUES (null,  '$username', '$email','$password', CURRENT_TIMESTAMP, 'standard')";

      if ($conn->query($insertQuery)=== TRUE) 
         {  
          $_SESSION["username"]= $username;
                            $_SESSION["role"]=  'user';
                            $_SESSION["email"]= $email;
                            $_SESSION["IsValid"]=  true;
          echo "<script>window.location='./login.php'</script>";
         }
         else {
 
             echo "Something goes wrong.";
         }
         $conn->close();
  } 
  }
}
 
  
?>