<?php
    session_start();
    $_SESSION['name'] = strip_tags($_POST['name']);
    header("Location: /");