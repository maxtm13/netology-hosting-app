<?php
    session_start();
    $_SESSION['name'] = strip_tags($_POST['name']);
    $header = str_replace(basename($_SERVER['REQUEST_URI']), '', $_SERVER['REQUEST_URI']);
    header("Location: " . $header);

