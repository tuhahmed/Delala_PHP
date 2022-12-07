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
    <title>Messages</title>
    <?php include 'header.php'; ?>
</head>

<body>
<?php include 'nav.php'; ?>
<div class="container ">
        <div class="row mt-2">
            <div class="col-md-4">
                <select name="menu" id="meun-items">
                    <option value="inbox">Inbox</option>
                    <option value="archived">Archived</option>
                    <option value="spam">Spam</option>
                  </select>
                <br>
                <div class="list-group">
                <table>
                        <tbody>
                        <?php
      
      $query= "Select * From Contact";
      $result= $conn->query($query);
      if($result->num_rows>0)
      {
          while($row=$result->fetch_assoc())
          {
              echo " <tr><td>
              <a href='#' class='list-group-item list-group-item-action flex-column align-items-start  mt-2  mb-2'>
                        <div class='d-flex w-100 justify-content-between mt-1 mb-1'>
                            <small><b>".$row['sendfrom']."</b></small>
                            <small><b>".$row['subject']."</b></small>
                        </div>
                        <small>".$row['body']."</small>
                    </a>
             </td></tr>";
          }
      }
   
      ?>
       </tbody>
                    </table>
                    
                </div>

            </div>
            <div class="col-md-8">
                <div class="form-group shadow-textarea reply">
                    <textarea class="form-control z-depth-1" id="txtAreaReply" rows="3" placeholder="Write something here..."></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-2">
            <div class="col-md-4" ng-app="jobsList" ng-cloak ng-controller="myCtrl">
                <select name="menu" id="meun-items">
                    <option value="inbox">Inbox</option>
                    <option value="archived">Archived</option>
                    <option value="spam">Spam</option>
                  </select>
                <br>
                <div class="list-group">                       
                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start  mt-2  mb-2" ng-repeat="job in jobs">
                        <div class="d-flex w-100 justify-content-between mt-1 mb-1">
                            <small><b>Employeer</b></small>
                            <small><b>3 days ago</b></small>
                        </div>
                        <small>Message Detail Here</small>
                    </a>

                </div>

            </div>
            <div class="col-md-8">
                <div class="form-group shadow-textarea reply">
                    <textarea class="form-control z-depth-1" id="txtAreaReply" rows="3" placeholder="Write something here..."></textarea>
                </div>
            </div>
        </div>
    </div>
    <script>
        var app = angular.module("jobsList", []);
        app.controller("myCtrl", function($scope) {
            Object.defineProperty($scope, "queryFilter", {
                get: function() {
                    var out = {};
                    out["$"] = $scope.jobsearch;
                    return out;
                }
            });
            $scope.jobs = ['1', '2', '3', '4', '5'];

            $scope.addItem = function() {
                $scope.errortext = "";
                if (!$scope.title) {
                    return;
                }
                $scope.jobs.push({
                    "title": $scope.title,
                    "description": $scope.description,
                    "location": $scope.location
                });



            }
            $scope.removeItem = function(x) {
                $scope.errortext = "";
                $scope.jobs.splice(x, 1);
            }

            $scope.orderJobs = function(x) {
                $scope.orderjobby = x;
            }
        });
    </script>
</body>

</html>