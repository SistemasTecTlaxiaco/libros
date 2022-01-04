<?php

include_once 'user_session.php';

$userSession = new correoSession();
$userSession->closeSession();

header("location: ../index.php");


?>