<?php
/**
 * Author: Josh "ShadowLordAlpha"
 * File: common.php
 * Description: Contains useful and common functions or things that are normally included in the file
 */
set_time_limit(120);

header('application/json');

if($_REQUEST['debug']!='') {
    header('text/plain');
}

function Debug($tag, $message) {
    if($_REQUEST['debug']!='') {
        echo "[".date("Y-m-d H:i:s")."] $tag - $message"
    }
}
?>
