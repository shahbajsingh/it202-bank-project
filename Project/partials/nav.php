<?php
session_start();
//Note: this is to resolve cookie issues with port numbers
$domain = $_SERVER["HTTP_HOST"];
if (strpos($domain, ":")) {
    $domain = explode(":", $domain)[0];
}
$localWorks = false; //some people have issues with localhost for the cookie params
//if you're one of those people make this false

//this is an extra condition added to "resolve" the localhost issue for the session cookie
// if (($localWorks && $domain == "localhost") || $domain != "localhost") {
//     session_set_cookie_params([
//         "lifetime" => 60 * 60,
//         "path" => "/Project",
//         // "domain" => $_SERVER["HTTP_HOST"] || "localhost",
//         "domain" => $domain,
//         "secure" => true,
//         "httponly" => true,
//         "samesite" => "lax"
//     ]);
// }
require_once(__DIR__ . "/../lib/functions.php");

?>
<nav>
    <ul>
        <?php if (is_logged_in()) : ?>
            <li><a href="home.php">Home</a></li>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Profile</a></li>
            <?php if (has_role('admin')) : ?>
                <li><a href="admin.php">Admin</a></li>
            <?php endif; ?>
        <?php endif; ?>
        <?php if (!is_logged_in()) : ?>
            <li><a href="login.php">Login</a></li>
            <li><a href="register.php">Register</a></li>
        <?php endif; ?>
        <?php if (is_logged_in()) : ?>
            <li><a href="logout.php">Logout</a></li>
        <?php endif; ?>
    </ul>
</nav>