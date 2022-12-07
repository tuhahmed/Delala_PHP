<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'nav.php'; ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!-- Name: <input type="text" name="fname1">-->
  <div class="input-group mb-3">
                                <small class="input-group-text" id="basic-addon3" style="width:100px;">Name </small>
                                <input type="text" class="form-control" name="fname" aria-describedby="basic-addon3" required>
                            </div>

                            <div class="input-group mb-3">
                                <small class="input-group-text" id="basic-addon3" style="width:100px;">Email</small>
                                <input type="email" class="form-control" name="email" aria-describedby="basic-addon3" required>
                            </div>
                            <div class="input-group mb-3">
                                <small class="input-group-text" id="basic-addon3" style="width:100px;">Phone: </small>
                                <input type="number" class="form-control" name="phone" aria-describedby="basic-addon3" required>
                            </div>

                            <div class="input-group mb-3">
                                <small class="input-group-text" id="basic-addon3" style="width:100px;">Subject</small>
                                <input type="text" class="form-control" name="subject" aria-describedby="basic-addon3" required>
                            </div>

                            <div class="input-group">
                                <small class="input-group-text" style="width:100px;">Comment </small>
                                <textarea class="form-control" name="body" aria-label="With textarea"></textarea>
                            </div>
                            <div class="form-check form-check-inline mt-5">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">I Agree</label>
                            </div>
                            
  <input class="btn btn-primary" type="submit"></input>
</form>
<table>
    <tr>
    <td>Send From</td>
    <td>Subject</td>
    <td>Body</td>
    </tr>
    <tbody>
        <?php
      
        $query= "Select * From jobs";
        $result= $conn->query($query);
        if($result->num_rows>0)
        {
            while($row=$result->fetch_assoc())
            {
                echo "<tr><td>".$row['jobid']."</td><td>".$row['description']."</td><td>".$row['location']."</td></tr>";
            }
        }
     
        ?>
    </tbody>
</table>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


   $_SESSION['username'] = "tuha";
$_SESSION['useremail'] = "tuha@gmail.com";
  // collect value of input field
  $name = $_POST['fname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $body = $_POST['body'];
  

  
 $insertQuery= "INSERT INTO contact (id,  sendfrom, subject, body) VALUES ( 9, '$email', '$subject', '$body')";
  
        if ($conn->query($insertQuery)=== TRUE) 
        {  
          echo "HI this is success". $_SESSION['username'];
        }
        else {

            echo "Something goes wrong";
        }
        $conn->close();
  }
?>




    <script>
        $(document).ready(function() {
            $('#agreement').click(function() {
                $('#btnContact').toggle();
            });


        });
    </script>
</body>

</html>