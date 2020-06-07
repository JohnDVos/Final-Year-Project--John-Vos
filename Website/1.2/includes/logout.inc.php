<?php
//code writen with help from https://www.youtube.com/watch?v=LC9GaXkdxF8&t=2917s.

    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
