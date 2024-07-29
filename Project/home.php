<?php
require(__DIR__ . "/partials/nav.php");
// session_start();
require_login();
//ob_start();
?>
<html>

<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Home</h1>
    <?php display_flash_messages(); ?>
    <?php
    if (is_logged_in()) {
        echo "Welcome, " . get_user_email();
    } else {
        echo "You're not logged in";
    }
    //shows session info
    echo "<pre>" . var_export($_SESSION, true) . "</pre>";
    //ob_end_flush();
    ?>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const flashMessages = document.querySelectorAll('.flash-message');
            flashMessages.forEach(function(message) {
                setTimeout(function() {
                    message.classList.add('show');
                }, 1000);

                setTimeout(function() {
                    message.classList.remove('show');
                }, 5100);
            });
        });
    </script>
</body>

</html>