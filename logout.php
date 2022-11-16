<?php

session_start(); // continuar a sessão

session_destroy();

//redireccionar
header("location: index.php");
?>