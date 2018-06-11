<?php
  $i=2077;
  $fourth = floor(($i % 100) % 10);
  $third = floor(($i % 100) / 10);
  $second = floor(($i % 1000) / 100);
  $first = floor($i / 1000);
  $countNum =0;
  if($fourth<5)
  {
      $countNum += 1;
  }
  if($third<5)
  {
      $countNum += 1;
  }
  if($second<5)
  {
      $countNum += 1;
  }
  if($first<5)
  {
      $countNum += 1;
  }
  echo "Count = $countNum";
?>
