<?php
require(__DIR__ . "/partials/nav.php");
// session_start();
require_login();

$user = $_SESSION['user'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
<?php display_flash_messages(); ?>
        <h1>Profile</h1>
        <div class="profile-display">
            <div class="profile-item">
                <label>Username:</label>
                <p><?php echo htmlspecialchars($user['username']); ?></p>
            </div>
            <div class="profile-item">
                <label>Email:</label>
                <p><?php echo htmlspecialchars($user['email']); ?></p>
            </div>
            <a href="edit_profile.php" class="edit-profile-button">Edit Profile</a>
        </div>
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
