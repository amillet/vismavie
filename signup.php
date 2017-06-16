<?php
    session_start();
    $_SESSION = $_POST['inscription'];
    header('Location: /?page=choosejobs');