<?php
include "connect.php";
// var_dump($_GET);
if (isset($_GET)) {
  $name = $_GET['name'];
  $email = $_GET['email'];
  $phone = $_GET['phone'];

  $sql = $sql = "INSERT INTO `contacts` (`name`, `email`, `phone`) VALUES (\"$name\", \"$email\", \"$phone\")";
$query = $conn->query($sql);

}

 ?>

 <!DOCTYPE html>
 <html lang="en">
     <head>
       <!-- meta character set -->
       <meta charset="utf-8">
       <!-- Always force latest IE rendering engine or request Chrome Frame -->
       <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
       <title>Bootstrap Template</title>

       <!-- Mobile Specific Meta -->
       <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- bootstrap.min -->
       <link rel="stylesheet" href="css/bootstrap.min.css">

       <!-- Essential jQuery Plugins
       ================================================== -->
       <!-- Main jQuery -->
       <script src="js/jquery-1.11.1.min.js"></script>

       <!-- Twitter Bootstrap -->
       <script src="js/bootstrap.min.js"></script>

     </head>

     <body id="body">


       <div class="container">
         <h1>Insert contact</h1>

         <nav class="navbar navbar-inverse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="index.php">Home</a></li>
               <li><a href="new.php">New</a></li>
           </ul>
         </nav>

         <div class="form-group">

           <form class="" action="insert.php" method="get">



           <label for="name">Name</label><br>
           <input class="form-control" id="name" type="text" name="name"><br><br>

           <label for="email">Email</label><br>
           <input class="form-control" id="email" type="email" name="email"><br><br>

           <label for="phone">Phone</label><br>
           <input class="form-control" id="phone" type="text" name="phone"><br><br>

           <input type="submit" name="Submit" value="Submit">

           </form>
         </div>



       </div>

     </body>
   </html>
