<?php
include "functions.php";
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if (!file_exists("pages/$page.php")) {
        $page = "404";
    }
} else {
    $page = "home";
}

$siteUrl = "http://localhost/HamzaMobileStore";
$siteTitle = "Hamza Mobiles";
$siteTagline = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eveniet commodi obcaecati ipsam nemo Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore eveniet commodi obcaecati ipsam nemo";
$siteLogo = "$siteUrl/assets/img/logo.png";
$socialMedia = [
    "fa-facebook-f" => "https://www.facebook.com/",
    "fa-twitter" => "https://twitter.com/?lang=en",
    "fa-linkedin-in" => "https://pk.linkedin.com/",
    "fa-instagram" => "https://www.instagram.com/"
]



?>

<?php
$conn = mysqli_connect("localhost","root","", "hamza_mobiles_db") or die("Connection Failed :". mysqli_connect_error());
?>