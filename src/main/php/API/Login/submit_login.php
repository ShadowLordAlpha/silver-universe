<?php
/**
 * Author: Josh "ShadowLordAlpha"
 * File: submit_login.php
 * Description: Validate the given credentials and sign in the user
 */
include_once('../../include/common.php');

debug('DEBUG', 'Getting arguments');
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];

debug('DEBUG', 'Validating required arguments');
if($email=='') {
    debug('DEBUG', 'Email empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Email.'));
    exit();
} else if($password=='') {
    debug('DEBUG', 'Password empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Password.'));
    exit();
}

debug('DEBUG', 'Running logic');
// TODO: Actually code proper logic for this

debug('DEBUG', 'Done');
echo json_encode(array('return_code'=>1, 'return_message'=>'Success'));
exit();
?>
