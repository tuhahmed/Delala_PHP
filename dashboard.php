<?php
if (!isset($_SESSION)) {
  session_start();
}
?>
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
  <?php include 'config.php'; ?>
  <div class="container">

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <div class="container center p-5 mt-5 mb-5">
        <div class="row">
          <div class="col-md-12">
            <h3 style="font-family: sans-serif; font-weight: bold;"> Find Jobs in <span id="username">Toronto</span></h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 m-0 p-1">
            <div class="form-group">
              <input type="text" class="form-control" name="title" aria-describedby="keyword" placeholder="Job title or Keyword" ng-model="jobsearch">
            </div>
          </div>
          <div class="col-md-4 m-0 p-1">
            <div class="form-group">
              <input type="text" class="form-control" name="location" placeholder="Location">

            </div>
          </div>
          <div class="col-md-4 pull-left m-0 pl-0">
            <div class="form-group">
              <button type="submit" class="btn btn-primary btnSubmit" style="border-radius: 40px; width:250px">Find Jobs</button>
            </div>
          </div>
        </div>
      </div>

    </form>
    <?php
         
    ?>
    <div class="row" style="overflow-x:auto; ">
      <div class="col-md-12">
        <div id="chart_div"></div>
      </div>

    </div>

    <div class="row">
      <div class="col-md-4 col-sm-4">
        <div id="donut_single" style="width: 200px; height: 200px;"></div>


      </div>
      <div class="col-md-4 col-sm-4">
        <div id="donut_single1" style="width: 200px; height: 200px;"></div>

      </div>
      <div class="col-md-4 col-sm-4">
        <div id="donut_single2" style="width: 200px; height: 200px;"></div>

      </div>
    </div>

  </div>

  <script>
 $('.btnSubmit').click(function () {
 
       window.location = "./jobs.php";

   });
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ['Assessment', 'Result'],
        ['Project', 70],
        ['Class Work', 7],
        ['Attendance', 4],
        ['Participation', 5]
      ]);

      var options = {
        title: 'Last Course: AWT',
        is3D: true,
        legend: 'none',
        height: 900,
        width: 300,
        chartArea: {
          left: 5,
          top: 50,
          width: '90%',
          height: '250',
        },
      };

      var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawBasic);

    function drawBasic() {

      var data = new google.visualization.DataTable();
      data.addColumn('number', 'X');
      data.addColumn('number', 'Profession');

      data.addRows([
        [0, 0],
        [1, 10],
        [2, 23],
        [3, 17],
        [4, 18],
        [5, 9],
        [6, 11],
        [7, 27],
        [8, 33],
        [9, 40],
        [10, 32],
        [11, 35],
        [12, 30],
        [13, 40],
        [14, 42],
        [15, 47],
        [16, 44],
        [17, 48],
        [18, 52],
        [19, 54],
        [20, 42],
        [21, 55],
        [22, 56],
        [23, 57],
        [24, 60],
        [25, 50],
        [26, 52],
        [27, 51],
        [28, 49],
        [29, 53],
        [30, 55],
        [31, 60],
        [32, 61],
        [33, 59],
        [34, 62],
        [35, 65],
        [36, 62],
        [37, 58],
        [38, 55],
        [39, 61],
        [40, 64],
        [41, 65],
        [42, 63],
        [43, 66],
        [44, 67],
        [45, 69],
        [46, 69],
        [47, 70],
        [48, 72],
        [49, 68],
        [50, 66],
        [51, 65],
        [52, 67],
        [53, 70],
        [54, 71],
        [55, 72],
        [56, 73],
        [57, 75],
        [58, 70],
        [59, 68],
        [60, 64],
        [61, 60],
        [62, 65],
        [63, 67],
        [64, 68],
        [65, 69],
        [66, 70],
        [67, 72],
        [68, 75],
        [69, 80]
      ]);

      var options = {
        hAxis: {
          title: 'Profession'
        },
        vAxis: {
          title: 'Annual Salary'
        },
        height: 300,
        width: 1000,
      };

      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));

      chart.draw(data, options);
    }

    google.charts.setOnLoadCallback(drawChartDonut);

    function drawChartDonut() {

      var data = google.visualization.arrayToDataTable([
        ['Effort', 'Amount given'],
        ['My all', 100],
      ]);

      var options = {
        pieHole: 0.75,
        slices: {
          0: {
            color: 'orange'
          }
        },
        pieSliceTextStyle: {
          color: 'black',
        },
        legend: 'none'
      };

      var chart = new google.visualization.PieChart(document.getElementById('donut_single'));
      chart.draw(data, options);
      var options1 = {
        pieHole: 0.75,
        pieSliceTextStyle: {
          color: 'black',
        },
        slices: {
          0: {
            color: 'red'
          }
        },
        legend: 'none'
      };
      var chart1 = new google.visualization.PieChart(document.getElementById('donut_single1'));
      var data1 = google.visualization.arrayToDataTable([
        ['Effort', 'Amount given'],
        ['Firefox', 45.0],
        ['IE', 26.8],
      ]);
      chart1.draw(data1, options1);
      var chart2 = new google.visualization.PieChart(document.getElementById('donut_single2'));
      var options2 = {
        pieHole: 0.75,

        pieSliceText: "none",
        legend: 'none',
        title:'Employment Type',
        data

      };

      var data2 = google.visualization.arrayToDataTable([
        ['EmploymentType', 'Count'],
        <?php
        $query = "SELECT empoyment_type, count(jobid) as count FROM jobs GROUP by empoyment_type";
        $result = $conn->query($query);
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            echo "['" . $row['empoyment_type'] . "'," . $row['count'] . "],";
          }
        }
        ?>
      ]);
      chart2.draw(data2, options2);
    }
  </script>
  </div>
</body>

</html>