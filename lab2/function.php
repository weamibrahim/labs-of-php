<?php
function validate_form(){
$name=isset($_POST["name"])?$_POST["name"]:"";
$email=isset($_POST["email"])?$_POST["email"]:"";


if(empty($name)){

    return" <h1 style='color:red; text-align:center '>name is empty</h1> ";
}
if (empty($email)){
    return" <h1 style='color:red; text-align:center '>email is empty</h1> ";
}

if(strlen($name) >  __MAX_NAME_LENGTH_){
    return "<h1 style='color:red; text-align:center '>name length is not right</h1>";
}
elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    return "<h1 style='color:red; text-align:center '>email is not correct</h1>";

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
       
        $value =trim(strtolower($value));
      
        echo "<br/><strong style=' display:flex ;font-size:30px;
        justify-content: center;'  >$key  : $value </strong> " ;
        }}




function save_to_file() {
    $fp = fopen(_Saving_File_, "a+");
    $date_time=date("F j Y g:i a"); 
    $date_time.=",";
    $ip_address=$_SERVER['REMOTE_ADDR'];
    $ip_address.=",";
    fwrite($fp,$date_time);
    fwrite($fp,$ip_address);
   
$written_string = implode(" , ", $_POST);
    fwrite($fp, $written_string.PHP_EOL);
    fclose($fp);
}


function convert_file_to_array() {
    return file(_Saving_File_);
}

?>