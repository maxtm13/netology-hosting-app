<?php
    session_start();
    unset($_SESSION['name']);
    $header = str_replace(basename($_SERVER['REQUEST_URI']), '', $_SERVER['REQUEST_URI']);
    header("Location: ". $header);
