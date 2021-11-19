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



if (empty($_POST['email'])) {
    $response['success'] = false;
    $response['message'] = "Email should be filled!";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['password'])) {
    $response['success'] = false;
    $response['message'] = "Password should be filled!";
    print_r(json_encode($response));
    return false;
}
if (empty($_POST['type'])) {
    $response['success'] = false;
    $response['message'] = "Choose Type";
    print_r(json_encode($response));
    return false;
}

$email = $db->escapeString($_POST['email']);
$password = $db->escapeString($_POST['password']);
$type = $db->escapeString($_POST['type']);

if(($_POST['type'] == 'college')){
    $sql = "SELECT * FROM college WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if ($num == 1) {
        $response['success'] = true;
        $response['message'] = "Login successfully";
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Invalid Email or Password";
        print_r(json_encode($response));

    }

    

}
else if(($_POST['type'] == 'company')){
    $sql = "SELECT * FROM company WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if ($num == 1) {
        $response['success'] = true;
        $response['message'] = "Login successfully";
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Invalid Email or Password";
        print_r(json_encode($response));

    }

    

}
else if(($_POST['type'] == 'institution')){
    $sql = "SELECT * FROM institution WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);
    if ($num == 1) {
        $response['success'] = true;
        $response['message'] = "Login successfully";
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Invalid Email or Password";
        print_r(json_encode($response));

    }

    

}
else if(($_POST['type'] == 'student')){
    $sql = "SELECT * FROM student WHERE email = '" . $email . "' AND password = '" . $password . "'";
    $db->sql($sql);
    $res = $db->getResult();
    $num = $db->numRows($res);

    
	
    if ($num == 1) {
        $response['success'] = true;
        $response['message'] = "Login successfully";
        print_r(json_encode($response));

    }
    else{
        $response['success'] = false;
        $response['message'] = "Invalid Email or Password";
        print_r(json_encode($response));

    }

    

}



?>