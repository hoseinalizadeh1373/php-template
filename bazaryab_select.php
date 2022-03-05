<?php
header("Content-Type: application/json; charset=UTF-8");

require_once 'connect.php';

$app=$_GET['namm'];

$query = $app;

// $query=$query.$app;

$result = @mysqli_query($con, $query);

$response = array();
if($result){
while($row = @mysqli_fetch_array($result)){
//$data = array();

$data['ID'] =$row['ID'];
$data['code_moarref'] =$row['code_moarref'];
$data['name'] =$row['name'];
$data['id_mahsool'] =$row['id_mahsool'];
$data['mablagh_kol'] =$row['mablagh_kol'];
$data['mablagh_bazaryab'] =$row['mablagh_bazaryab'];
$data['pardakht'] =$row['pardakht'];
$data['tarikh'] =$row['tarikh'];
$data['peygiri'] =$row['peygiri'];
$data['request'] =$row['request'];
    // array_push($response,$data);  
    $response[] = $data;
}
}
else{
    echo 'failed';
}



echo json_encode($response);

mysqli_close($con);

?>