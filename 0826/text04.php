<?php
  $chi=50;
  $eng=50;
  $mat=58;
  $his=50;
  $total=$chi+$eng+$mat+$his;
  $score=$total/4;

 echo"總分:".$total."分<br>";
 echo"平均:".$score."分<br>";
 echo"你的等級是:";
  if ($score>=90) {
  echo"A";
  } 
  else if ($score>=80){
  echo"B";
  }
  else if ($score>=70){
      echo"C";
  }
  else if ($score>=60){
      echo"D";
  }
  else  {
      echo"E";
  }
?>