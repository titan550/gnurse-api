<?php
$password = "rasmuslerdorf";
$hash = password_hash($password, PASSWORD_DEFAULT);

echo $hash . "\n";

if(password_verify($password, $hash ))
{
	echo "pass is valid";
}
else
{
	echo "pass is invalid";
}

?>