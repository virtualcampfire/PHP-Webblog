<?php
include('admin.php');
session_destroy();
header('Location: /');
exit;