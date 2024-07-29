<?php
require(__DIR__ . "/partials/nav.php");
// session_start();
require_login();

$user = $_SESSION['user'];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $current_password = $_POST['current_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    if (empty($username)) {
        $errors[] = "Username is required";
        flash_message("Username is required");
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "A valid email is required";
        flash_message("A valid email is required");
    }

    if (!empty($new_password) && $new_password !== $confirm_password) {
        $errors[] = "New passwords do not match";
        flash_message("New passwords do not match");
    }

    $db = getDB();

    // Check for duplicate username
    $stmt = $db->prepare("SELECT id FROM Users WHERE username = :username AND id != :id");
    $stmt->execute([':username' => $username, ':id' => $user['id']]);
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $errors[] = "Username is already taken";
        flash_message("Username is already taken");
    }

    // Check for duplicate email
    $stmt = $db->prepare("SELECT id FROM Users WHERE email = :email AND id != :id");
    $stmt->execute([':email' => $email, ':id' => $user['id']]);
    $existing_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($existing_user) {
        $errors[] = "Email is already taken";
        flash_message("Email is already taken");
    }

    $stmt = $db->prepare("SELECT password FROM Users WHERE id = :id");
    $stmt->execute([':id' => $user['id']]);
    $db_user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($db_user && password_verify($current_password, $db_user['password'])) {
        if (empty($errors)) {
            $update_password = !empty($new_password) ? password_hash($new_password, PASSWORD_BCRYPT) : $db_user['password'];
            $stmt = $db->prepare("UPDATE Users SET username = :username, email = :email, password = :password, modified = NOW() WHERE id = :id");
            $stmt->execute([
                ':username' => $username,
                ':email' => $email,
                ':password' => $update_password,
                ':id' => $user['id']
            ]);

            $_SESSION['user']['username'] = $username;
            $_SESSION['user']['email'] = $email;

            flash_message("Profile updated successfully", 'success');
            header("Location: edit_profile.php");
            exit;
        }
    } else {
        $errors[] = "Current password is incorrect";
        flash_message("Current password is incorrect");
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Edit Profile</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php display_flash_messages(); ?>
    <h1>Edit Profile</h1>
    <form method="POST" action="edit_profile.php">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>
        <br>
        <label for="current_password">Current Password:</label>
        <input type="password" id="current_password" name="current_password" required>
        <br>
        <label for="new_password">New Password (optional):</label>
        <input type="password" id="new_password" name="new_password">
        <br>
        <label for="confirm_password">Confirm New Password:</label>
        <input type="password" id="confirm_password" name="confirm_password">
        <br>
        <button type="submit">Update Profile</button>
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