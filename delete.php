<?php
include "connect.php";
if (isset($_GET['id']) and !empty($_GET['id'])) {
  $sql = "SELECT * FROM `contacts` WHERE `id`=" . $_GET['id'];
  $query = $conn->query($sql);
  $result = $query->fetch_row();
  // print_r($result);
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
         <h1>Edit contact</h1>

         <nav class="navbar navbar-inverse">
           <ul class="nav navbar-nav">
             <li class="active"><a href="index.php">Home</a></li>
               <li><a href="new.php">New</a></li>
           </ul>
         </nav>

         <div class="form-group">

           <form class="" action="edit.php" method="get">

             <label for="id">ID</label><br>
             <input class="form-control" id="id" type="hidden" name="id" value="<?php echo   $result[0] ?>" readonly="true"><br><br>


           <label for="name">Name</label><br>
           <input class="form-control" id="name" type="text" name="name" value="<?php echo   $result[1] ?>"><br><br>

           <label for="email">Email</label><br>
           <input class="form-control" id="email" type="text" name="email" value="<?php echo   $result[2] ?>"><br><br>

           <label for="phone">Phone</label><br>
           <input class="form-control" id="phone" type="text" name="phone" value="<?php echo   $result[3] ?>"><br><br>

           <input type="submit" name="Submit" value="Submit">

           </form>
         </div>



       </div>

       <?php
       if (isset($_GET['id'])) {
         $id = $_GET['id'];


         $sql = "DELETE FROM `contacts` WHERE `id`=$id";
$result = $conn->query($sql);

       }


        ?>
     </body>
   </html>
