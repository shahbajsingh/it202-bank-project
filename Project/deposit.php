<?php
require(__DIR__ . "/partials/nav.php");
require_login();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $account_id = $_POST['account_id'];
    $amount = $_POST['amount'];
    $memo = $_POST['memo'];

    try {
        $db = getDB();
        $db->beginTransaction();

        $stmt = $db->prepare("SELECT id, balance FROM Accounts WHERE id = :id AND user_id = :user_id");
        $stmt->execute([':id' => $account_id, ':user_id' => get_user_id()]);
        $account = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$account) {
            throw new Exception("Account not found");
        }

        $account_balance = $account['balance'] + $amount;

        $stmt = $db->prepare("SELECT id, balance FROM Accounts WHERE account_number = '000000000000'");
        $stmt->execute();
        $world_account = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$world_account) {
            throw new Exception("World account not found");
        }

        $world_account_id = $world_account['id'];
        $world_balance = $world_account['balance'] - $amount;

        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                            VALUES (:world_account_id, :account_id, :balance_change, 'deposit', :memo, :world_balance)");
        $stmt->execute([
            ':world_account_id' => $world_account_id,
            ':account_id' => $account_id,
            ':balance_change' => -$amount,
            ':memo' => $memo,
            ':world_balance' => $world_balance
        ]);

        $stmt = $db->prepare("INSERT INTO Transactions (account_src, account_dest, balance_change, transaction_type, memo, expected_total) 
                            VALUES (:account_id, :world_account_id, :balance_change, 'deposit', :memo, :account_balance)");
        $stmt->execute([
            ':account_id' => $account_id,
            ':world_account_id' => $world_account_id,
            ':balance_change' => $amount,
            ':memo' => $memo,
            ':account_balance' => $account_balance
        ]);

        $stmt = $db->prepare("UPDATE Accounts SET balance = :balance WHERE id = :id");
        $stmt->execute([':balance' => $world_balance, ':id' => $world_account_id]);

        $stmt = $db->prepare("UPDATE Accounts SET balance = :balance WHERE id = :id");
        $stmt->execute([':balance' => $account_balance, ':id' => $account_id]);

        $db->commit();
        flash_message("Deposit successful!", 'success');
        header("Location: my_accounts.php");
        exit;
    } catch (Exception $e) {
        $db->rollBack();
        flash_message("An error occurred: " . $e->getMessage(), 'error');
    }
}

$user_id = get_user_id();
$db = getDB();
$stmt = $db->prepare("SELECT id, account_number, balance FROM Accounts WHERE user_id = :user_id");
$stmt->execute([':user_id' => $user_id]);
$accounts = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Deposit</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .form-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #E0FFFF;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .form-container label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .form-container select,
        .form-container input[type="number"],
        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .form-container button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #07beb8;
            border: none;
            border-radius: 4px;
            color: white;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-container button[type="submit"]:hover {
            background-color: #008B8B;
        }
    </style>
</head>

<body>
    <?php display_flash_messages(); ?>
    <div class="form-container">
        <h1>Deposit</h1>
        <form method="POST">
            <label for="account_id">Account:</label>
            <select name="account_id" required>
                <?php foreach ($accounts as $account) : ?>
                    <option value="<?php echo htmlspecialchars($account['id']); ?>"><?php echo htmlspecialchars($account['account_number']) . " - Balance: " . htmlspecialchars($account['balance']); ?></option>
                <?php endforeach; ?>
            </select>
            <label for="amount">Amount:</label>
            <input type="number" name="amount" required min="1">
            <label for="memo">Memo:</label>
            <input type="text" name="memo">
            <button type="submit">Deposit</button>
        </form>
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
