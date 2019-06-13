<?php

$email = $_GET['email'];

if (strlen($email) == 0) {
    die("Please, specify the email in the query string (?email=blablabla).");
}

$email = trim($email);
$email = strtolower($email);

$hash = md5($email);

?>

<p>The Gravatar for <? echo $email; ?> is:</p>

<img src="https://www.gravatar.com/avatar/<? echo $hash; ?>?s=100" width="100" height="100" />
