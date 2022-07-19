<?php
session_start();
//unset($_SESSION['Data']);
session_destroy();
echo "Session Destroyed";

?>