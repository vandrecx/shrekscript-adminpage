<?php
    session_start();
    session_destroy();

    unset(
        $_SESSION['usuarioId']
    );
    header("Location: logindex.php");
?>