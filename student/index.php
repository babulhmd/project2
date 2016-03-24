<?php
function dd($a){
echo "<pre>";
print_r($a);
echo "</pre>";
};

$a = [
['id'=>001, 'name'=>'kamrul', 'class'=>'BA', 'group'=>'science', 'subject'=>['physics', 'chemistry', 'math']],
['id'=>002, 'name'=>'babul', 'class'=>'BA', 'group'=>'science', 'subject'=>['physics', 'chemistry', 'math']],
['id'=>003, 'name'=>'anwar', 'class'=>'BA', 'group'=>'science', 'subject'=>['physics', 'chemistry', 'math']]
];

// dd($a);

// echo count($a[0]['subject']);
for ($i=0; $i <count($a); $i++) {
  echo $a[$i]['name']."<br>";
}


 ?>
