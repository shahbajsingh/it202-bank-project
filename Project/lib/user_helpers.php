<?php
function is_logged_in()
{
    return isset($_SESSION["user"]); //se($_SESSION, "user", false, false);
}
function has_role($role)
{
    if (!is_logged_in()) {
        return false;
    }

    $user_id = get_user_id();
    $db = getDB();
    $stmt = $db->prepare("SELECT r.name FROM User_Roles ur JOIN Roles r ON ur.role_id = r.id 
                        WHERE ur.user_id = :user_id AND ur.is_active = 1 AND r.is_active = 1");
    $stmt->execute([':user_id' => $user_id]);
    $roles = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($roles as $r) {
        if ($r["name"] === $role) {
            return true;
        }
    }

    return false;
}
function get_username()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "username", "", false);
    }
    return "";
}
function get_user_email()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "email", "", false);
    }
    return "";
}
function get_user_id()
{
    if (is_logged_in()) { //we need to check for login first because "user" key may not exist
        return se($_SESSION["user"], "id", false, false);
    }
    return false;
}

function require_login()
{
    if (!is_logged_in()) {
        display_flash_messages();
        flash_message("You must be logged in to access that page.", 'error');
        header("Location: login.php");
        exit;
    }
}

function flash_message($message, $type = 'error')
{
    if (!isset($_SESSION)) {
        session_start();
    }
    $_SESSION['flash'][] = ['message' => $message, 'type' => $type];
}

function display_flash_messages()
{
    if (!isset($_SESSION)) {
        session_start();
    }
    if (isset($_SESSION['flash'])) {
        foreach ($_SESSION['flash'] as $flash) {
            echo '<div class="flash-message ' . htmlspecialchars($flash['type']) . '">';
            echo htmlspecialchars($flash['message']);
            echo '</div>';
        }
        unset($_SESSION['flash']);
    }
}

function is_admin()
{
    return has_role('admin');
}

function require_admin()
{
    if (!is_admin()) {
        flash_message("You do not have permission to access that page.", 'error');
        header("Location: home.php");
        exit;
    }
}
