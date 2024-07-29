<?php
require(__DIR__ . "/partials/nav.php");

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username_or_email = trim($_POST['username_or_email']);
    $password = $_POST['password'];

    if (empty($username_or_email) || empty($password)) {
        flash_message("Username/Email and password are required");
    }

    if (empty($errors)) {
        $db = getDB();
        $stmt = $db->prepare("SELECT id, username, email, password FROM Users WHERE username = :username_or_email OR email = :username_or_email");
        $stmt->execute([':username_or_email' => $username_or_email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user; // Set session variable
                flash_message("Login successful", 'success');
                header("Location: home.php");
                exit;
            } else {
                $errors[] = "Invalid password";
                flash_message("Invalid password");
            }
        } else {
            $errors[] = "Username/Email doesn't exist";
            flash_message("Username/Email doesn't exist");
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php display_flash_messages(); ?>
    <h1>Login</h1>
    <form method="POST" action="login.php">
        <label for="username_or_email">Username or Email:</label>
        <input type="text" id="username_or_email" name="username_or_email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Login</button>
    </form>
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