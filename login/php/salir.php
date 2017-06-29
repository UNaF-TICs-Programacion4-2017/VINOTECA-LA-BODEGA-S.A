<?php
/*
Destruimos la session
*/
session_start();
session_destroy();
header('Location:login.php?estado=finalizada');
?>