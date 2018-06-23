<?php
/**
 * Author: Josh "ShadowLordAlpha"
 * File: submit_login.php
 * Description: Validate the given credentials and sign in the user
 */
include_once('../../include/common.php');

Debug('DEBUG', 'Getting arguments');
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

Debug('DEBUG', 'Validating required arguments');
if($email=='') {
    Debug('DEBUG', 'Email empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Email.'));
    exit();
} else if($password=='') {
    Debug('DEBUG', 'Password empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Password.'));
    exit();
}

Debug('DEBUG', 'Running logic');
// TODO: Actually code proper logic for this

Debug('DEBUG', 'Done');
echo json_encode(array('return_code'=>1, 'return_message'=>'Success'));
exit();
?>
