<?php 
$current_index=isset($_GET["next"])&&is_numeric($_GET["next"])?(int)$_GET["next"]:0;
$next_index=$current_index + __RECORDS_PER_PAGE__;
$previous_index=($current_index-__RECORDS_PER_PAGE__>0)?$current_index-__RECORDS_PER_PAGE__:0;
$items =$db->get_all_record_paginated(array(),$current_index);
//var_dump($items)

?>
<html>
      <head>
      <style>
        caption{

     
 
text-align: center;
width: 800px;
height: 50px;
text-transform: uppercase;
border-radius: 10px;
padding-top: 20px;
margin :20px auto;
animation-name: chacol;
animation-duration: 4s;
animation-iteration-count: infinite;


}
@keyframes chacol {
  0%{
    background-color: rgb(236, 249, 255);
    
  }
  
  25%{
    background-color: rgb(255, 231, 204);
  }
  50%{
    background-color: rgb(248, 203, 166);
  }
  100%{
    background-color: #d88ae06d;
    
    

  }
}
a{
    text-decoration: none;
   
}
table{
    width: 50%;
  margin-top: 200px;
  margin-left: 400px;
  }
  button{
margin-left: 500px;

  }
  table th{
    text-align: center;
    background-color:var(--blue);
    color: var(--white);
  padding: 5px;
  border: 2px solid black;
  background-color: black;
  color: white;
  }
  table td{
    text-align: center;
    border: 2px solid black;
  
  
  }
</style>  
      </head>
      <body>


     
<table >
<caption>products og glasess </caption>
<tr>
    <th>item id</th>
    <th>name</th>
    <th>details</th>
</tr>

<?php




foreach($items as $item )
{
    echo"<tr><td>".$item["id"]."</td>";
    echo"<td>".$item["product_name"]."</td>";
    echo"<td><a href='".$_SERVER["PHP_SELF"]."?id=".$item["id"]."'> more </a></td></tr>";

}
?>

</table>
<button><a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$previous_index;?>"> < </a></button>
 <button><a href="<?php echo $_SERVER["PHP_SELF"]."?next=".$next_index;?>">></a></button>


      </body></html>