<?php
require(__DIR__ . "/partials/nav.php");
require_login();
require_admin();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php display_flash_messages(); ?>
    <h1>Admin Page</h1>
    <p>Welcome, Admin!</p>
</body>
</html>