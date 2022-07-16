<?php
session_start();





unset($_SESSION['uid']);
unset($_SESSION['role']);

header('Location: ../index.php');