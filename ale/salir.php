<?php
session_start();

session_destroy();

header("Location: lg.html");
exit();
?>