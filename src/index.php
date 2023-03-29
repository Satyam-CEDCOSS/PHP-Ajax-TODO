<?php
include "config.php";
?>
<html>
    <head>
        <title>TODO List</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <link href="./CSS/style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>TODO LIST</h2>
            <h3>Add Item</h3>
            <!-- ADD ITEM  -->
            <p>
                <input id="new-task" type="text"><button id="add_cart">Add</button>
                <button id="update_btn" onclick="update()">Update</button>
            </p>
            <!-- TODO TASK DISPLAY  -->
            <h3>Todo</h3>
            <ul id='incomplete-tasks'></ul>

            <!-- COMPLETE TASK DISPLAY  -->
            <h3>Completed</h3>
            <ul id='completed-tasks'></ul>

        </div>
    
    </body>
    <script src="./JS/script.js"></script>
</html>