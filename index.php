<?php
  $file__all__number = './allNumber.php';
  $file__test = './test.txt';
  
  $data3 = file($file__all__number, $context = null);

  $numbers = [];
  foreach ($data3 as $item){
    $numbers[] = md5($item);
  };

  $newString = implode(PHP_EOL, $numbers) ;

  file_put_contents($file__test, $newString); 
?>