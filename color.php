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
   echo "<ol>";
foreach ($color as $key => $value) {

      echo "<li style='color:".$value['code']."'>".
      $value['name'].
      "{".$value['code'].
        "}" .
        "</li>";

}
echo "</ol>";

 ?>
