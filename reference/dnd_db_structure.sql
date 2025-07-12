CREATE TABLE `settlements`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `size` TINYINT UNSIGNED NOT NULL
);
CREATE TABLE `store_types`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `appear_chance_size_1` INT NOT NULL,
    `appear_chance_size_2` INT NOT NULL,
    `appear_chance_size_3` INT NOT NULL,
    `appear_chance_size_4` INT NOT NULL,
    `appear_chance_size_5` INT NOT NULL
);
CREATE TABLE `stores`(
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `store_type_id` INT NOT NULL,
    `settlement_id` INT NOT NULL
);
ALTER TABLE
    `stores` ADD CONSTRAINT `stores_settlement_id_foreign` FOREIGN KEY(`settlement_id`) REFERENCES `settlements`(`id`);
ALTER TABLE
    `stores` ADD CONSTRAINT `stores_store_type_id_foreign` FOREIGN KEY(`store_type_id`) REFERENCES `store_types`(`id`);