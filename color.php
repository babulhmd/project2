<?php
// $color = ['red', 'blue', 'green', 'black', 'yellow', 'white', 'purple', 'magenta', 'brown'];
// echo "<ol>";
// foreach ($color as $key => $value) {
//     echo "<li style=color:$value;>".$value. "</li>";
//   }
// echo "</ol>";
$color = [
  ['name'=>'red', 'code'=>'#FF0000'],
  ['name'=>'green', 'code'=>'#008000'],
  ['name'=>'black', 'code'=>'#000000'],
  ['name'=>'yellow', 'code'=>'#FFFF00'],
  ['name'=>'white', 'code'=>'#FFFFFF'],
  ['name'=>'purple', 'code'=>'#800080'],
  ['name'=>'magenta', 'code'=>'#FF00FF'],
  ['name'=>'brown', 'code'=>'#A52A2A0']
   ];

//    foreach ($color as $key => $value) {
//
//       echo "<li style='color:".$value['code']."'>".
//       $value['name'].
//       "{".$value['code'].
//         "}" .
//         "</li>";
//
// }
// echo "</ol>";

 ?>

 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title>Color Table</title>
   </head>
   <body>
     <h1 align="center">Color Table</h1>
     <table border="1" width="100%">
       <thead>
         <tr>
           <th>ID</th>
           <th>Name of Color</th>
           <th>Color Code</th>
         </tr>
       </thead>
       <tbody>

           <?php
           foreach ($color as $key => $value) {
             echo "<tr>";
              echo "<td>".$key."</td>";
              echo "<td>".$value['name']."</td>";
              echo "<td>".$value['code']."</td>";
               echo "</tr>";
            }

            ?>

       </tbody>
     </table>
   </body>
 </html>
