<?php
    $header = $_SERVER['REQUEST_URI'] .'web/';
    echo $header;
    header("Location: " . $header);
