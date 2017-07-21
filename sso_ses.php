<?php


	$_SESSION['extids'] = array();

$ext = md5(uniqid(mt_rand(), true)); // just a semi random diddy
$_SESSION['extids'][$ext] = 1;

$link = 'http://sakthikanth.esy.es/?' . http_build_query( array('sessid' => session_id(). '-' . $ext));

list($sid, $ext) = explode('-', $_GET['sessid']);
session_id($sid);
session_start();
if (isset($_SESSION['extids'][$ext])) {
    // okay, make sure it can't be used again
    unset($_SESSION['extids'][$ext]);
}
?>
