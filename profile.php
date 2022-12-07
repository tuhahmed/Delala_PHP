<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
  <title>Profile</title>

  <?php include './header.php'; ?>
</head>

<body>
  <?php include 'nav.php'; ?><br>
  <div class="container-fluid">
    <style>
      h3 {
        font-weight: 500;
        font-size: x-large;
      }

      h4 {
        font-weight: 500;
        font-size: 14px;
        margin: 0;
        margin-bottom: 20px;
      }

      .main-box {
        width: 100%;
        height: 450px;
        background-color: white;
        margin: 0;
        border-radius: 20px;
        position: relative;
        border: 1px solid rgba(0, 0, 0, 0.08);
      }

      .input-file {
        display: none;
      }

      .input-btn {
        background-color: white;
        color: #fff;
        border: 1px solid #8c8c8c;
        padding: 10px;
        border-radius: 20px;
        margin: 15px;
      }

      .input-btn:hover {
        background-color: #c9cccb;
      }

      .pen-btn {
        background-color: white;
        color: #fff;
        border: none;
        padding: 10px;
        border-radius: 20px;
        margin: 10px;
        margin-top: -20px
      }

      .upload {
        position: absolute;
        right: 0px;
      }

      .pen-btn.upload {
        right: 1%;
        top: 52%;
        font-size: 20px;
      }

      .cover {
        width: 100%;
        height: 200px;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
      }

      .main-content {
        padding: 0px 25px;
        color: rgba(0, 0, 0, 0.9);
        line-height: 10px;

      }

      .dp {
        height: 132px;
        width: 132px;
        border-radius: 50%;
        left: 4px;
        position: relative;
        top: 5px;
        background-color: white;
        padding: 5px;
        margin-top: -100px;
        margin-left: 22px;
        margin-bottom: -4px;
      }

      .cam {
        color: #0a66c2;
        cursor: pointer;
      }

      .pen {
        color: rgba(0, 0, 0, 0.6);
        font-size: x-large;
        cursor: pointer;
      }

      .but {
        width: 107px;
        height: 32px;
        border-radius: 20px;
        outline: none;
        border: none;
        background: #0a66c2;
        color: white;
        font-size: large;
        text-align: center;
        margin-left: 20px;
      }

      .but:hover {
        background-color: #203e5d;
      }

      .but1 {

        height: 35px;
        border-radius: 20px;
        outline: none;
        border: 1px solid black;
        background: transparent;
        font-size: medium;
        text-align: center;
        color: rgba(0, 0, 0, 0.6);
        margin-left: 10px;
        padding: 0px 20px;
      }

      .clr {
        color: rgba(0, 0, 0, 0.6);
      }

      .but1:hover {
        border: 2px solid black;
        background: #ddd;
      }

      .box {
        display: flex;
        align-items: flex-start;
        margin-bottom: -23px;
      }

      ul {
        list-style: none;
      }

      li {
        color: #0a66c2;
        font-weight: 600;
      }

      .content {
        display: flex;
        margin: 0;
        padding: 0;
      }

      .icon {
        height: 50px;
        width: 50px
      }

      .align {
        display: flex;
      }

      .cmpy {
        font-size: 16px;
        font-family: inherit;
        color: black;
      }

      span {
        margin-right: 14px;
        margin-left: 10px;
      }

      .current {
        width: 34%;
        margin-left: 70px
      }

      .clg {
        position: relative;
        top: 15px;
      }
    </style>
    <input type='file' class='input-file' id="imgInp">
    <button class='input-btn upload' id='input_btn'><i class="fa fa-camera cam"></i></button>
    <img class="cover" id="blah" src="https://images.ctfassets.net/7thvzrs93dvf/wpImage18643/2f45c72db7876d2f40623a8b09a88b17/linkedin-default-background-cover-photo-1.png?w=800&q=100">
    <div class="dp-container"><img class="dp" src="./assets/xoxo.jpg"></div>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <h3>Tuha Ahmed</h3>
          <h4>Student @ TriOS College
          </h4>
          <div class="content">
            <h4>Toronto, ON, Canada</h4>
          </div>
          <div class="card" style="width: 100%;">
            <div class="card-header">
              <span><i class="fa fa-trophy"></i></span>
              <span>My Skills</span>

            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">An item</li>
              <li class="list-group-item">A second item</li>
              <li class="list-group-item">A third item</li>
            </ul>
          </div>

          <div class="card mt-5" style="width: 100%;">
            <div class="card-header">
              <span><i class="fa fa-user"></i></span>
              <span>About Me</span>

            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">
                <div class="card-body">
                  <h5 class="card-title">Experience</h5>
                  <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </li>
              <li class="list-group-item">
                <div class="card-body">
                  <h5 class="card-title">Education</h5>
                  <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </li>
              <li class="list-group-item">
                <div class="card-body">
                  <h5 class="card-title">Accomplishment</h5>
                  <p class="card-text text-muted">With supporting text below as a natural lead-in to additional content.</p>

                </div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-md-9 col-sm-12">
          <table id="attendancetbl" class="table table-striped display" style="width:100%">
            <thead>
              <tr>
                <th>Position</th>
                <th>Company</th>
                <th>Date Applied</th>
                <th>Status</th>
                <th ></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>10/5/2022</td>
                <td>Present</td>
                <td>Toronto</td>
                <td>Room TO111</td>
                <td><a class="btn btn-sm btn-danger">Withdraw</a></td>
              </tr>
              <tr>
                <td>10/4/2022</td>
                <td>Present</td>
                <td>Toronto</td>
                <td>Room TO111</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script>
    $(document).ready(function() {
        $('#attendancetbl').DataTable({
            scrollX: true,
        });
    });
</script>
</body>


</html>