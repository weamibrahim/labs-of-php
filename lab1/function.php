<?php
function validate_form(){
$name=isset($_POST["name"])?$_POST["name"]:"";
$email=isset($_POST["email"])?$_POST["email"]:"";
$message=isset($_POST["message"])?$_POST["message"]:"";


if(empty($name)){

    return" <h1 style='color:red; text-align:center '>name is empty</h1> ";
}
if (empty($email)){
    return" <h1 style='color:red; text-align:center '>email is empty</h1> ";
}
if(empty($message)){
    return" <h1 style='color:red; text-align:center '>message is empty</h1> ";
}
if(strlen($name) >  __MAX_NAME_LENGTH_){
    return "<h1 style='color:red; text-align:center '>name length is not right</h1>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    return "<h1 style='color:red; text-align:center '>email is not correct</h1>";

}
elseif(strlen($message) > __MAX_MASSAGE_LENGTH_){
   return"<h1 style='color:red; text-align:center '>massge length is not right</h1>";
}

else{
  return "";
}
}
function remember_variable($var){
    if(isset($_POST[$var])&&!empty($_POST[$var])){
    
    return $_POST[$var];
    
    }
    
    else{
        return "" ;
    }
    
    }
function print_information(){
  echo  "<h3 style='color:red; text-align:center;margin-top:30px ; font-size:30px' >".__THANKYOU__."</h3>";
 
    foreach($_POST as $key=>$value){
        if($key!="submit"){
        $value =trim(strtolower($value));
        echo "<br/><strong style=' display:flex ;font-size:30px;
        justify-content: center;'  >$key  :   $value </strong>" ;
        }}
}



?>