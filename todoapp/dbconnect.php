<?php

    $con = mysqli_connect('localhost', 'root', '', 'react_todoapp');

    if (!$con) {
        die('database connection error');
    }