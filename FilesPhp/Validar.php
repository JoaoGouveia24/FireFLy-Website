<?php
session_start();
if (!isset($_SESSION["UserId"])){
	echo "Página reservada a utilizadores registados!";
	exit;
}
?>