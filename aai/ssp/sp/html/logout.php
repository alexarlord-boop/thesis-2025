<?php
require_once('/var/simplesamlphp/lib/_autoload.php');

$auth = new SimpleSAML\Auth\Simple('custom-sp');
$auth->logout();
?>
