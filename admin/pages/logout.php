<?php
session_start();
if (isset($_COOKIE["admin_id"]) && !empty($_COOKIE["admin_id"]) ) {
    setcookie("admin_id", '', time() +  1, '/');
}
unset($_SESSION["admin_id"]);
// echo "<pre>";
// print_r($_SESSION);
// print_r($_COOKIE);
// die;
echo "<script>window.location = '../';</script>";