<?php
session_start();
array_push($_SESSION["complete_list"],$_SESSION["todo_list"][$_POST["id"]]);
array_splice($_SESSION["todo_list"],$_POST["id"],1);
?>
<!-- CHECKED FEATURE  -->