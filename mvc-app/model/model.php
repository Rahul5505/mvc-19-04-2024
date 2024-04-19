<?php
    //create a model
    class model
    {
        //delacre a globle variable
        public $con="";
        
        public function __construct()
        {
            //database connection
            try
            {
                $this->con=new mysqli("localhost","root","","mvc-app");
               // echo "connect successfully";
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->con));
            }
        }

    }



?>