<?php

class Counter{


    private $_count;
    public function __construct()
      {
          $this-> _count =$this->getCount();

      }

    public function getCount(){

        if(file_exists(_conter_file_))
           {
              return intval(file_get_contents(_conter_file_));
           }
             return 0;
    
        }         

    public function incrementCount(){

          if(isset($_SESSION[_session_key_conunter_]))
            {
              return false;     
            }
           $this->_count++;
           $_SESSION[_session_key_conunter_]=true;
           return $this->_count;
            
      
        }
    public function updateCount()
    {

       $fp= fopen (_conter_file_,"w+");

       fwrite($fp,$this->_count);

        fclose($fp);
    }


    public function incrementAndUpdate(){
  
       if(  $this->incrementCount()!=false)
         {
                $this->updateCount();
         }
      }
}
?>