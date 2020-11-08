<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="proj3twiliodemoW.php" method="post">
	Contact Number: <input type="text" name="number">
	<input type="submit">
</form>
</body>
</html>

<?php
require('C:\xampp\htdocs\vendor\autoload.php');
use Twilio\Rest\Client;

function sendMsg() {
	$sid = 'AC8013b059d3b02d19d9a90707db9ddccb';
	$token = 'fc82e1ab444bae4492a4c648593e6e05';

	$client = new Client($sid, $token);

	$client->messages->create('9564595298', [
		'from' => '+19382539661',
		'body' => 'php project 3 twilio demo function test2'
	]);
}

if(isset($_POST['number'])) {
	echo sendMsg();
}
?>
