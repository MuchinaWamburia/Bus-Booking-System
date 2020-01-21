<?php
require_once('../includes/Dbconnect.php');
$request = $_POST['request'];
//$request = 2;


if($request == 1){
  //$routeId = 'kariobangi';
  $routeId = $_POST['routeId'];
  $response = array();
  $query = "SELECT * FROM bus_timing  WHERE route_Id = '$routeId'";
  $result = mysqli_query($DBcon,$query) or die(mysqli_error($DBcon));
   while($row = $result->fetch_array(MYSQLI_ASSOC)) {
            $response[] = array ('id'=> $row['id'],
                              'bus_time' =>$row['bus_time']);           
                           
  }
  
  echo json_encode($response);
  exit;
}

if($request == 2){
  //$routeId = 'kariobangi';
  $busTime = $_POST['busTime'];

  $response = array();
  $query = "SELECT bus_reg ,price FROM bus_timing  WHERE  bus_time = '$busTime'";
  $result = mysqli_query($DBcon,$query) or die(mysqli_error($DBcon));
   $row = $result->fetch_array() ;
   $count = $result->num_rows;
     if($count == 1) {
        $response[] = array ('price' => $row['price'],
                            'bus_reg'=>$row['bus_reg']);
     } else {
       $response[] = array(  'price' => '0');
     }
          
  echo json_encode($response);
  exit;
}

if($request == 3){
  //$routeId = 'kariobangi';
  $busDate = $_POST['datepicker'];

  $response = array();
  $query = "SELECT dest_from ,dest_to FROM tickets  WHERE  busDate = '$busDate'";
  $result = mysqli_query($DBcon,$query) or die(mysqli_error($DBcon));
   $row = $result->fetch_array() ;
   $count = $result->num_rows;
     if($count == 1) {
        $response[] = array ('dest_from' => $row['dest_from'],
                            'dest_to'=>$row['dest_to']);
     } else {
       $response[] = array(  'price' => 'There on buses on this date');
     }
          
  echo json_encode($response);
  exit;
}

?>