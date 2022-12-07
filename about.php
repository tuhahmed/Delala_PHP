<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php include 'header.php'; ?>
</head>

<body>
    <?php include 'nav.php'; ?>
    <div class="container">
        <div class="card">
            <div class="card-header bg-success">
                <h4>About Us</h4>
            </div>
            <div class="card-body">
                <i class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                    posuere erat a ante. Lorem ipsut amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Integer posuere erat a ante.</i>
            </div>
        </div>
        <br><br>
        <div class="card mt20">
            <div class="card-header bg-info">
                <h4>Here why you choose us</h4>
            </div>
            <div class="card-body">
                <p class="text-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                    posuere erat a ante. Lorem ipsut amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. Lorem ipsum dolor sit amet, consectetur adipiscing
                    elit. Integer posuere erat a ante.</p>
            </div>
        </div>
    </div>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
    </form>
</body>

</html>