CREATE TABLE IF NOT EXISTS `Transactions` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `account_src` INT NOT NULL,
    `account_dest` INT NOT NULL,
    `balance_change` DECIMAL(10, 2) NOT NULL,
    `transaction_type` VARCHAR(50) NOT NULL,
    `memo` TEXT,
    `expected_total` DECIMAL(10, 2) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (`account_src`) REFERENCES `Accounts`(`id`),
    FOREIGN KEY (`account_dest`) REFERENCES `Accounts`(`id`)
);
