<?php
require(__DIR__ . "/partials/nav.php");
require_login();

$user_id = get_user_id();
$db = getDB();
$stmt = $db->prepare("SELECT account_number, account_type, modified, balance FROM Accounts WHERE user_id = :user_id LIMIT 5");
$stmt->execute([':user_id' => $user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>My Accounts</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .accounts-table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        .accounts-table th, .accounts-table td {
            border: 1px solid #ddd;
            padding: 12px 15px;
            text-align: left;
        }

        .accounts-table th {
            background-color: #07beb8;
            color: white;
            font-weight: bold;
        }

        .accounts-table a {
            color: #07beb8;
            text-decoration: none;
        }

    </style>
</head>
<body>
    <?php display_flash_messages(); ?>
    <div class="container">
        <h1>My Accounts</h1>
        <table class="accounts-table">
            <tr>
                <th>Account Number</th>
                <th>Account Type</th>
                <th>Modified</th>
                <th>Balance</th>
            </tr>
            <?php foreach ($accounts as $account): ?>
                <tr>
                    <td><?php echo htmlspecialchars($account['account_number']); ?></a></td>
                    <td><?php echo htmlspecialchars($account['account_type']); ?></td>
                    <td><?php echo htmlspecialchars($account['modified']); ?></td>
                    <td><?php echo "$".htmlspecialchars($account['balance']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
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
