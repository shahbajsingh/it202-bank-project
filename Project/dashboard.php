<?php
require(__DIR__ . "/partials/nav.php");
require_login();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .dashboard-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
            width: 80%;
            text-align: center;
            height: 80%;
            margin: 0 auto;
            margin-top: 30px;
        }

        .dashboard-tile {
            background-color: #3dccc7;
            color: white;
            padding: 100px;
            font-size: 45px;
            text-align: center;
            border: 1px solid #07beb8;
            text-decoration: none;
            border-radius: 8px;
            transition: background-color 0.3s, color 0.3s;
        }

        .dashboard-tile a {
            color: white;
            text-decoration: none;
            font-size: 45px;
            font-weight: bold;
        }

        .dashboard-tile a:hover {
            color: white;
            text-decoration: none;
        }

        .dashboard-tile:hover {
            background-color: #008B8B;
            color: white;
        }
    </style>
</head>
<body>
<?php display_flash_messages(); ?>
    <div class="dashboard-container">
        <a href="create_account.php" class="dashboard-tile">Create Account</a>
        <a href="my_accounts.php" class="dashboard-tile">My Accounts</a>
        <a href="deposit.php" class="dashboard-tile">Deposit</a>
        <a href="withdraw.php" class="dashboard-tile">Withdraw</a>
        <a href="transfer.php" class="dashboard-tile">Transfer</a>
        <a href="profile.php" class="dashboard-tile">Profile</a>
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
