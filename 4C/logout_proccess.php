<?php
session_start();

session_destory();
session_unset();

header("location: login.php");