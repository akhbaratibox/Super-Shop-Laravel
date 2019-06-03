ALTER TABLE `products` ADD `rating` DOUBLE(8,2) NOT NULL DEFAULT '0' AFTER `slug`;

ALTER TABLE `reviews` ADD `status` INT(1) NOT NULL DEFAULT '1' AFTER `comment`;

ALTER TABLE `orders` ADD `coupon_discount` DOUBLE(8,2) NOT NULL DEFAULT '0' AFTER `grand_total`;

INSERT INTO `business_settings` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES (NULL, 'coupon_system', '0', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
