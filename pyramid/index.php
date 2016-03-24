<?php
$dot =  array();
$total = 17;
for ($i=0; $i < $total; $i++) {
  if ($i>(($total-1)/2)) {
  array_pop($dot);
  echo implode($dot, " "), "<br>";
}else {
  $dot[] = "$i";
  echo implode($dot, " "),"<br>";
}

}

 ?>
