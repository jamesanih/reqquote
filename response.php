<?php
    include('config.php');
    include('functions.php');
   foreach ($_POST as $key => $value) {
       $data[$key] = $value; 
   }

   $name =  filter($connect,$data['bizname']);
   echo $name . " " . "This is the name";

?>