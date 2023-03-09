<?php 

require_once("config.php");
require_once("function.php");
$error="";
if(!empty($_POST)){
   $error= validate_form();

if(empty($error)){
  
    save_to_file();
    print_information();
    exit();
}



};


$parameter = isset($_GET["page"])? $_GET["page"]:"";

if($parameter==="user.php"){
    require_once("form/user.php");}
    else{
        require_once("form/form.php");  
    }
   
  
?>

