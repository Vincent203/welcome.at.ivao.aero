<?php
require __DIR__ . '/../autoloader.php';

use Classes\LoginHandler;

$loginHandler = new LoginHandler;
$loginHandler->logout();

header("Location: https://welcome.at.ivao.aero");
?>