<?php
    session_start();
    $txt = "";
    $cnt = 0;
    foreach ($_SESSION["complete_list"] as $value) {
        $txt .=  "<li><input type='checkbox' onclick='uncheck(".$cnt.")' checked><label>".$value."</label><input type='text'><button class='delete' onclick='delete_complete(".$cnt++.")'>Delete</button></li>";
    }
    echo $txt;
?>
<!-- DISPLAY COMPLETE LIST  -->