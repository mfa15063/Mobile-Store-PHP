<?php
if (isset($_POST['signin'])) {
    extract($_POST);
    $query = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = md5('$password') ";
    $result = mysqli_query($db, $query);

    if ($row = mysqli_fetch_assoc($result)){
        $admin_id = $row['admin_id'];
        $_SESSION["admin_id"] = "$admin_id";
        if (isset($_POST['remember']) && !empty($_POST['remember']) && $_POST['remember'] == "ok") {
            setcookie("admin_id", "$admin_id", time() + (86400 * 30), '/');
        }

    } else {
        echo "<script>alert('Wrong Username or Password');</script>";
    }

}

$is_login = false;

if (isset($_COOKIE["admin_id"]) && !empty($_COOKIE["admin_id"]) ) {
    $_SESSION["admin_id"] = $_COOKIE["admin_id"];
}

if (isset($_SESSION["admin_id"]) && !empty($_SESSION["admin_id"])) {
    $is_login = true;
}
