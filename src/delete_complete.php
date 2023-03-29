<?php
session_start();
array_splice($_SESSION["complete_list"],$_POST["id"],1);
?>
<!-- COMPLETE DELETE HERE -->