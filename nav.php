<?php
if (!isset($_SESSION)) {
  session_start();
}
?>

  <style>
    .navbar-nav>li>a {

      display: block;
      color: #181818;
      text-align: center;
      min-width: 150px;
      padding: 20px;
      text-decoration: none;
      font-size: 17px;
      border-radius: 60px;
    }

    .user-profile {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      -o-object-fit: cover;
      object-fit: cover;
      margin-right: 10px;
    }

    /*
.active {
    color: black;
    border-bottom: 3px solid rgb(98, 138, 198);
    border-radius: 60px;
}
*/
    .navbar-nav>li>a:hover {
      border-bottom: 3px solid rgb(98, 138, 198);
    }
  </style>
 
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a href="#" class="navbar-brand ui-button-text-icon-primary text-xxl-start">ደላላ</a>
    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">    
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="jobs.php"><i class="fas fa-tasks "></i> Jobs</a>
          </li>
         
          

          <?php
          if (isset($_SESSION['username'])) {            
          if ( $_SESSION["role"]==  'employer') {
         
          ?>
           <li class="nav-item">
            <a class="nav-link" href="jobregistration.php"><i class="far fa-edit"></i> Post Jobs</a>
          </li>
          
          <?php
          }
        } else {
          ?>
            <li class="nav-item">
              <a class="nav-link" href="./company.php"><i class="fas fa-building"></i> Employer</a>
            </li>
          <?php
          }
          ?>

        </ul>
     
      <div class="navbar-nav">
      <?php
          if (isset($_SESSION['username'])) {
          ?>
            <a class="nav-link" href="profile.php"><i class="fas fa-user"></i> <?php echo $_SESSION['username']; ?> </a>
            <a href="./logout.php" class="nav-item nav-link">Logout</a>
          <?php
          } else {        
          ?>
        <a href="./login.php" class="nav-item nav-link">Login</a>
        <?php
          }     
          ?>
      </div>
    </div>
  </div>
</nav>

