<?php
$users = convert_file_to_array();
$key=["Visit Date","IP Address","Email","Name"];
foreach($users as $user){
    $user_details = explode(",",$user);

 echo "<div>";
 $i=0;
    foreach($user_details as $value ){
      
      echo "<h3> $key[$i]: $value </h3>";
  $i=$i+1;
    }
   
    echo str_repeat("-", 60);
      echo "</div>";
}?>