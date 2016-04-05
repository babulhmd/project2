<?php
if (isset($_GET['id'])) {
  echo $_GET['id'];exit();
};
$tasks = [
  ["id"=>33, "task"=>"First Task"],
  ["id"=>54, "task"=>"Second Task"],
  ["id"=>1212, "task"=>"Third Task"],
  ["id"=>1, "task"=>"Fourth Task"],
  ["id"=>7, "task"=>"Fifth Task"]
];

 ?>

 <h1>Task List</h1>

 <ul>

   <?php foreach ($tasks as $key => $value) {
    //  echo "<li>".$value['task']. "</li>";
    echo "<li><a href='new.php?id=$value[id]'>";
    echo $value['task'];
    echo "</a>";
    echo "</li>";
   } ?>
 </ul>
