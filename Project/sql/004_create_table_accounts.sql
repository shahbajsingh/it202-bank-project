CREATE TABLE IF NOT EXISTS `Accounts` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `account_number` CHAR(12) NOT NULL UNIQUE,
    `user_id` INT NOT NULL,
    `balance` DECIMAL(10, 2) NOT NULL DEFAULT 0,
    `account_type` VARCHAR(50) NOT NULL,
    `created` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
    `modified` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);
