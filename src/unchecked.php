<?php
session_start();
array_push($_SESSION["todo_list"],$_SESSION["complete_list"][$_POST["id"]]);
array_splice($_SESSION["complete_list"],$_POST["id"],1);
?>
<!-- UNCHECKED FEATURE  -->