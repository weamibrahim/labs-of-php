<?php 

session_start();
require_once("vendor/autoload.php");

$counter=new Counter();
$counter->incrementAndUpdate();
$count=$counter->getCount();
echo "<h2>your number as visitor = $count</h2>";



$error="";
if(!empty($_POST)){
   $error= validate_form();

if(empty($error)){
  
    print_information();
    exit();
}


};


$parameter = isset($_GET["page"])? $_GET["page"]:"contactform";

if($parameter==="contactform")
    require_once("form/form.php");
   
  
?>

