<?php
$id =(isset($_GET["id"]))?intval($_GET["id"]):0;
$current_item=$db->get_record_by_id($id)[0];

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


table{
    width: 50%;
  margin-top: 50px;
  margin-left: 400px;
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
  img{
      width: 300px;
  }
            </style>

      </head>
      <body>
  <table>

     <caption><?php echo "name of product  ".$current_item["product_name"];?></caption>
     <thead>
          <tr>

                <th>type</th>
                <th> price</th>
                <th> code</th>
                <th> item_id</th>
                <th> rating</th>
                <th> image</th>

           </tr>
     </thead>
            <tr>
              
              <td>  <?php echo $current_item["product_name"];?></td>
             <td>   <?php echo $current_item["list_price"];?></td>
             <td>       <?php echo $current_item["product_code"];?></td>
                <td>      <?php echo $current_item["id"];?></td>
                  <td>     <?php echo $current_item["rating"];?>

                </td>

                <td>
                           <img src="<?php echo"images/".$current_item["photo"] ;?>">
                </td>
            </tr>



   </table>
      </body>
</html>