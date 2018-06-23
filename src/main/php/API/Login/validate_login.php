<?php
/**
 * Author: Josh "ShadowLordAlpha"
 * File: submit_login.php
 * Description: Validate the given credentials and sign in the user
 */
include_once('../../include/common.php');

Debug('DEBUG', 'Getting arguments');
$token = $_REQUEST['token'];

Debug('DEBUG', 'Validating required arguments');
if ($token == '') {
    Debug('DEBUG', 'Token empty, returning fail.');
    echo json_encode(array('return_code'=>0, 'return_message'=>'Please enter Token.'));
    die();
}

Debug('DEBUG', 'Running logic');
// TODO: Actually code proper logic for this

Debug('DEBUG', 'Done');
echo json_encode(array('return_code'=>1, 'return_message'=>'Success'));
?>
