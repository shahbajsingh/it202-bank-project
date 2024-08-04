<?php
require(__DIR__ . "/partials/nav.php");
require_login();

$account_number = $_GET['account_number'] ?? null;
if (!$account_number) {
    flash_message("Account number is required.", 'error');
    header("Location: my_accounts.php");
    exit;
}

$db = getDB();
$stmt = $db->prepare("SELECT * FROM Accounts WHERE account_number = :account_number AND user_id = :user_id");
$stmt->execute([':account_number' => $account_number, ':user_id' => get_user_id()]);
$account = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$account) {
    flash_message("Account not found.", 'error');
    header("Location: my_accounts.php");
    exit;
}

$stmt = $db->prepare("SELECT t.*, a1.account_number as src_account_number, a2.account_number as dest_account_number
                    FROM Transactions t
                    JOIN Accounts a1 ON t.account_src = a1.id
                    JOIN Accounts a2 ON t.account_dest = a2.id
                    WHERE t.account_src = :account_id OR t.account_dest = :account_id
                    ORDER BY t.created DESC
                    LIMIT 10");
$stmt->execute([':account_id' => $account['id']]);
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Account Details</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php display_flash_messages(); ?>
    <h1>Account Details</h1>
    <p>Account Number: <?php echo htmlspecialchars($account['account_number']); ?></p>
    <p>Account Type: <?php echo htmlspecialchars($account['account_type']); ?></p>
    <p>Balance: <?php echo htmlspecialchars($account['balance']); ?></p>
    <p>Created: <?php echo htmlspecialchars($account['created']); ?></p>
    <p>Modified: <?php echo htmlspecialchars($account['modified']); ?></p>
    <h2>Transaction History</h2>
    <table>
        <tr>
            <th>Source Account</th>
            <th>Destination Account</th>
            <th>Type</th>
            <th>Change</th>
            <th>Date</th>
            <th>Expected Total</th>
            <th>Memo</th>
        </tr>
        <?php foreach ($transactions as $transaction) : ?>
            <tr>
                <td><?php echo htmlspecialchars($transaction['src_account_number']); ?></td>
                <td><?php echo htmlspecialchars($transaction['dest_account_number']); ?></td>
                <td><?php echo htmlspecialchars($transaction['transaction_type']); ?></td>
                <td><?php echo htmlspecialchars($transaction['balance_change']); ?></td>
                <td><?php echo htmlspecialchars($transaction['created']); ?></td>
                <td><?php echo htmlspecialchars($transaction['expected_total']); ?></td>
                <td><?php echo htmlspecialchars($transaction['memo']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
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