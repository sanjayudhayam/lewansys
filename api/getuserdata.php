<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
header("Expires: 0");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

include_once('../includes/crud.php');
$db = new Database();
$db->connect();



if (empty($_POST['id'])) {
    $response['success'] = false;
    $response['message'] = "Id should be filled!";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['type'])) {
    $response['success'] = false;
    $response['message'] = "Choose Type";
    print_r(json_encode($response));
    return false;
}

$id = $db->escapeString($_POST['id']);
$type = $db->escapeString($_POST['type']);
$sql = "SELECT * FROM $type WHERE id = '" . $id . "'";
$db->sql($sql);
$res = $db->getResult();
$num = $db->numRows($res);
if ($num >= 1) {
    $response['success'] = true;
    $response['message'] = "Retrived successfully";
    $response['data'] = $res;
    print_r(json_encode($response));

}
else{
    $response['success'] = false;
    $response['message'] = "No Data found";
    
    print_r(json_encode($response));

}



?>