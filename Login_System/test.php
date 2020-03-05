<?php
$validator = '70add16b969f1a3d1b4ce95d9326376d9e52259cd51164dcee5303bc6783c889';
$tokenBin = hex2bin($validator);

$tokenCheck = password_verify($tokenBin, $row["pwdResetToken"]);