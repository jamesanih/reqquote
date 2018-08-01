<?php
    include('config.php');
    include('functions.php');
    session_start();

   foreach ($_POST as $key => $value) {
       $data[$key] = $value; 
   }
   $content_writer = "";
   $budget = filter($connect, $data['budget_decision']);
   $timeframe = filter($connect, $data['timeframe_decision']);
   $pages = filter($connect, $data['pages_decision']);
   $dynamic_functions = implode(', ', $data['question_3']);
   $brochures_decision = filter($connect, $data['brochures_decision'] );
   $webcontent_decision = filter($connect, $data['webcontent_decision']);

   echo "inserted";

//    if($webcontent_decision == 'Yes') {
//        $content_writer = "alicktish";
//    }elseif ($webcontent_decision == 'No') {
//         $content_writer = "user";
//    }

//    if(!empty($_SESSION['id'])) {
//         $user_id = $_SESSION['id'];
//         $sql = "INSERT into price_determination (`user_id`, `budget`, `time_frame`, `no_pages`, `dynamic_function`,`brochures_decision`,`webcontent_decision`)VALUE ('".$user_id."', '".$budget."', '".$timeframe."', '".$pages."', '".$dynamic_functions."','".$brochures_decision."','".$content_writer."')";
    
//         $query = mysqli_query($connect, $sql);
     
//         if($query) {
//             echo "inserted";
//         }else {
//             echo "not inserted";
//         }
//    }else{
//        echo "Please login to continue";
//    }
   

  

  

   
   

?>