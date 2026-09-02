<?php

session_start();

session_unset();
session_destroy();

header("Location: /NTI/Assignment_3/login.php");
exit();
