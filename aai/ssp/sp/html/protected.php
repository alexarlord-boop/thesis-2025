<?php
require_once('/var/simplesamlphp/lib/_autoload.php');

$auth = new SimpleSAML\Auth\Simple('custom-sp'); // 'custom-sp' is your authsource


$auth->requireAuth();


$attributes = $auth->getAttributes();

echo "<h1>Protected Resource</h1>";
echo "<p>You are authenticated.</p>";

echo "<pre>";
print_r($attributes);
echo "</pre>";

echo '<a href="logout.php">Logout</a>';
?>
