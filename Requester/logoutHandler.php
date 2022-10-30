<?php
echo "Log out";
session_start();
session_unset();
session_destroy();

header('Location: /bcaivproject/index.php');