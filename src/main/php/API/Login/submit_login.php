<?php
/**
 * Author: Josh "ShadowLordAlpha"
 * File: submit_login.php
 * Description: Validate the given credentials and sign in the user
 */
include_once('../../include/common.php');

Debug('DEBUG', 'Getting arguments');
$email = mysqli_real_escape_string($conn, $_REQUEST['email']);
$password = mysqli_real_escape_string($conn, $_REQUEST['password']);

Debug('DEBUG', 'Validating required arguments');
if ($email == '') {
    Debug('DEBUG', 'Email empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Email.'));
    die();
} else if ($password=='') {
    Debug('DEBUG', 'Password empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Password.'));
    die();
}

Debug('DEBUG', 'Running logic');
// TODO: Actually code proper logic for this
$checkLogin = "SELECT * FROM users WHERE email='$email' AND password='$password'";
mysqli_query($conn, $checkLogin) or die(mysqli_error($conn));

Debug('DEBUG', 'Done');
echo json_encode(array('return_code'=>1, 'return_message'=>'Success'));
?>
