<?php 

require_once("config.php");
require_once("function.php");
$error="";
if(!empty($_POST)){
   $error= validate_form();

if(empty($error)){
    // $name =trim(strtolower($_POST["name"]));
    // $email =trim(strtolower($_POST["email"]));
    // $message =trim(strtolower($_POST["message"]));
    // die("<h3>".__THANKYOU__."</h3>"

    // ."name =".$name."<br>"
    // ."emai=".$email."<br>"
    // ."massage=".$message."<br>"
    
    // );
    print_information();
    exit();
}



};


$parameter = isset($_GET["page"])? $_GET["page"]:"contactform";

if($parameter==="contactform")
    require_once("form/form.php");
   
  
?>

