<?php
require(__DIR__ . "/partials/nav.php");

$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username)) {
        $errors[] = "Username is required";
        flash_message("Username is required");
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Valid email is required";
        flash_message("Valid email is required");
    }

    if (empty($password)) {
        $errors[] = "Password is required";
        flash_message("Password is required");
    } elseif (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long";
        flash_message("Password must be at least 8 characters long");
    }

    if ($password !== $confirm_password) {
        $errors[] = "Passwords do not match";
        flash_message("Passwords do not match");
    }

    $db = getDB();
    // Check for duplicate username
    $stmt = $db->prepare("SELECT id FROM Users WHERE username = :username");
    $stmt->execute([':username' => $username]);
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $errors[] = "Username is already taken";
        flash_message("Username is already taken");
    }

    // Check for duplicate email
    $stmt = $db->prepare("SELECT id FROM Users WHERE email = :email");
    $stmt->execute([':email' => $email]);
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $errors[] = "Email is already taken";
        flash_message("Email is already taken");
    }

    if (empty($errors)) {
        $hashed_password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $db->prepare("INSERT INTO Users (username, email, password, created, modified) VALUES (:username, :email, :password, NOW(), NOW())");
        $success = $stmt->execute([':username' => $username, ':email' => $email, ':password' => $hashed_password]);

        if ($success) {
            flash_message("Registration successful", 'success');
            header("Location: login.php");
            exit;
        } else {
            flash_message("An error occurred during registration");
        }
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php display_flash_messages(); ?>
    <h1>Register</h1>
    <form method="POST" action="register.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($username ?? ''); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($email ?? ''); ?>" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" id="confirm_password" name="confirm_password" required>
        <br>
        <button type="submit">Register</button>
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