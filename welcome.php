<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif;
         text-align: center; 
         background-image: url("images/clouds.jpg");
               background-size: 1400px 1000px;
               background-repeat: no-repeat; 
               /* background-position: right top; */
               background-attachment: fixed;}
    </style>
</head>
<body>
    <div class="page-header">
        <h1><font color="white">Hi, </font><b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.<font color="white"> Welcome to our todo app.</font></h1>
        <h2><font color="white">Things your need to do:</font></h2>
     </div>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
        <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
    </p>
    <script>
var app = angular.module("myShoppingList", []); 
app.controller("myCtrl", function($scope) {
    $scope.products = ["Read a book"];
    $scope.addItem = function () {
        $scope.products.push($scope.addMe);
    }    
});
</script>

<div ng-app="myShoppingList" ng-controller="myCtrl">
  <ul>
    <li ng-repeat="x in products">{{x}}</li>
  </ul>
  <input ng-model="addMe">
  <button ng-click="addItem()">Add</button>
  <button ng-click="deleteItem()">Delete</button>
</div>

<p><font color="black">Add items.</font></p>

</body>
</html>


     
    <!-- <div class="formBg">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <?php if (isset($errors)){ ?>
                <p><?php echo $errors; ?></p>
                <?php  }?>
            <input type="text" name="task" class="task_input" placeholder="Insert task"><br><br>
            <input type="date" id="start" name="duedate" class="task_input" min="2019-05-01" max="2020-01-01"><br><br>
            <button type="submit" class="task_btn" name="submit">Add Task</button><br><br>
            <h4 class="tasks-update"><font color="aqua">CLICK HERE! To Update Task</font></h4>
            <div class="content">
            <input type="text" name="upT" class="task_input" placeholder="Insert task Number"><br><br>
            <input type="text" name="uTask" class="task_input"placeholder="Insert Changes"><br><br>
            <input type="date" id="update" name="uDate" class="task_input" min="2019-05-01" max="2020-01-01"><br><br>
            <button type="submit" class="task_btn" name="update">update</button>
            </div>
            </form>
      <table>
          <thead>
              <tr>
                  <th>id</th>
                  <th>Task</th>
                  <th>Due Date</th>
                  <th>Action</th>
              </tr>
          </thead>

          <tbody>
              <?php
       while($row = mysqli_fetch_array($tasks)){ ?>

           <tr>
            <td><?php echo $row['id'];?></td>
           <td class="task"><?php echo $row['task'];?></td>
                <td class="due"><?php echo $row['duedate'];?></td>
                 <td class="delete">
                      <a href="todo.php?del_task= <?php echo $row['id'];?>">x</a>
              </td>
          </tr>
               <?php }; ?>
           </tbody>
     </table> 

 <script>
  $(document).ready(function () {
      $(".content").hide();
$(".tasks-update").click(function () {
  $(".content").slideToggle();
});
});




  </script> 
  
</body>
</html>  -->

