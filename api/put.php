<?php
if($_SERVER['REQUEST_METHOD']=="PUT"){
    $response = array(
        'id'=>$_GET['id'],
        'success'=>true
    ); 
    echo json_encode($response);}
else{
    include_once('common.php');
}
?>