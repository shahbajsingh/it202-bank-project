<?php
require(__DIR__ . "/partials/nav.php");
require_login();

function generate_account_number()
{
    do {
        $account_number = str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT);
        $db = getDB();
        $stmt = $db->prepare("SELECT id FROM Accounts WHERE account_number = :account_number");
        $stmt->execute([':account_number' => $account_number]);
    } while ($stmt->fetch());
    return $account_number;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account_number = generate_account_number();
    $user_id = get_user_id();
    $account_type = 'checking';
    $initial_deposit = 5;

    try {
        $db = getDB();
        $db->beginTransaction();

        $stmt = $db->prepare("INSERT INTO Accounts (account_number, user_id, account_type, balance) VALUES (:account_number, :user_id, :account_type, :balance)");
        $stmt->execute([':account_number' => $account_number, ':user_id' => $user_id, ':account_type' => $account_type, ':balance' => 0]);

        $account_id = $db->lastInsertId();

        // initial deposit from world account
        $stmt = $db->prepare("SELECT id, balance FROM Accounts WHERE account_number = '000000000000'");
        $stmt->execute();
        $world_account = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$world_account) {
            throw new Exception("World account not found");
        }

        $world_account_id = $world_account['id'];
        $world_balance = $world_account['balance'] - $initial_deposit;
        $user_balance = $initial_deposit;

        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                            VALUES (:world_account_id, :account_id, :balance_change, 'deposit', 'Initial Deposit', :world_balance)");
        $stmt->execute([
            ':world_account_id' => $world_account_id,
            ':account_id' => $account_id,
            ':balance_change' => -$initial_deposit,
            ':world_balance' => $world_balance
        ]);

        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                            VALUES (:account_id, :world_account_id, :balance_change, 'deposit', 'Initial Deposit', :user_balance)");
        $stmt->execute([
            ':account_id' => $account_id,
            ':world_account_id' => $world_account_id,
            ':balance_change' => $initial_deposit,
            ':user_balance' => $user_balance
        ]);

        $stmt = $db->prepare("UPDATE Accounts SET balance = :balance WHERE id = :id");
        $stmt->execute([':balance' => $world_balance, ':id' => $world_account_id]);

        $stmt = $db->prepare("UPDATE Accounts SET balance = :balance WHERE id = :id");
        $stmt->execute([':balance' => $user_balance, ':id' => $account_id]);

        $db->commit();
        flash_message("Account created successfully!", 'success');
        header("Location: my_accounts.php");
        exit;
    } catch (Exception $e) {
        $db->rollBack();
        flash_message("An error occurred: " . $e->getMessage(), 'error');
    }
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>Create Account</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <?php display_flash_messages(); ?>
    <h1>Create a Checking Account</h1>
    <form method="POST">
        <button type="submit">Create Account</button>
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