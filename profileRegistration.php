<?php include 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <?php include 'header.php'; ?>
</head>
<body>
<?php include 'nav.php'; ?>   
  <div class="container mt-5">
    <form accept-charset="UTF-8" action="./profileRegistration.php" method="POST" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputName">First Name</label>
        <input type="text" name="firstname" class="form-control" id="firstName" placeholder="First Name" required="required">
        </div>
</div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputName">Last Name</label>
        <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name" required="required">
        </div>       
      </div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" required="required">Email address</label>
        <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter your email address">
      </div>

      <div class="form-group">
        <label for="inputAddress">Address</label>
        <input type="text" name="address" class="form-control" id="address" placeholder="1234 Ethiopia St">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" name="city" class="form-control" id="city" placeholder="City">
        </div>
        <div class="form-group col-md-3">
          <label for="inputZip">Postal Code</label>
          <input type="text" name="postalcode" class="form-control" id="postalcode" placeholder="X1X 1X1">
        </div>
        <div class="form-group col-md-3">
          <label for="inputZip">Telephone</label>
          <input class="form-control" name="tel" type="tel" value="1-(555)-555-5555" id="example-tel-input">
        </div>
      </div>
      <div class="form-group">
      <label for="example-date-input" class="col-3 col-form-label">Start Date</label>
      <input class="form-control" name="starting_date" type="date" value="2020-02-01" id="example-date-input">
        
      </div>
     
      <div class="form-group mt-3">
        <label class="mr-4">Upload your CV:</label>
        <input type="file" name="file">
      </div>
      <div class="form-group mt-3">
        <label class="mr-4">Profile Picture:</label>
        <input type="file" name="image">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $_SESSION['username'] = "tuha";
   $_SESSION['useremail'] = "tuha@gmail.com";
     // collect value of input field
     $firstname = $_POST['firstname'];
     $lastname = $_POST['lastname'];
     $email = $_POST['email'];
     $profession  = '';
     $address = $_POST['address'];
     $city = $_POST['city'];
     $province = $_POST['postalcode'];
     $country = 'Canada';
     $phonenumber = $_POST['tel'];
     $startdate = $_POST['starting_date'];
     $experiance = '8';

     if(!empty($_FILES["image"]["name"])) { 
 
      $fileName = basename($_FILES["image"]["name"]); 
      $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
        
      $allowTypes = array('jpg','png','jpeg','gif'); 
      if(in_array($fileType, $allowTypes)){ 
          $image = $_FILES['image']['tmp_name']; 
          $imgContent = addslashes(file_get_contents($image)); 
          $insertQuery= "INSERT INTO profile  VALUES ( null, '$firstname', '$lastname', '$email','$profession','$address', '$city','ON', '$country','$province',8798,'$startdate', 8, '$imgContent', '$startdate'')";
          try{
          
                     if ($conn->query($insertQuery)=== TRUE) 
                     {  
                      echo $insertQuery;
                     }
                     else {
             
                         echo $insertQuery;
                     }
                     $conn->close();
                    }
                    catch(Exception $e) {
                      echo 'Message: ' .$e->getMessage();
                    }
      }
    }

     
    
  }
    ?>
  </div>
</body>
</html>