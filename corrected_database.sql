
CREATE TABLE IF NOT EXISTS `users` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `full_name` varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL UNIQUE,
    `password` varchar(255) NOT NULL,
    `wallet` float NOT NULL,
    `status` text NOT NULL,
    `teacher` boolean NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `teachers` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `full_name` varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `admins` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `user_id` int NOT NULL,
    `full_name` varchar(255) NOT NULL,
    `phone_number` varchar(255) NOT NULL,
    `password` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `courses` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `title` varchar(255) NOT NULL,
    `description` text NOT NULL,
    `price` float NOT NULL,
    `new_field` int NOT NULL,
    `teacher_id` int NOT NULL,
    `teacher_picture` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `videos` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `course_id` int NOT NULL,
    `title` text NOT NULL,
    `video_url` varchar(255) NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `purchases` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `user_id` int NOT NULL,
    `course_id` int NOT NULL,
    `price` float NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `transactions` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `user_id` int NOT NULL,
    `amount` float NOT NULL,
    `transaction_type` text NOT NULL,
    `created_at` datetime NOT NULL,
    `updated_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `user_api_tokens` (
    `id` int AUTO_INCREMENT NOT NULL UNIQUE,
    `user_id` int NOT NULL,
    `token` varchar(255) NOT NULL,
    `expires_at` datetime NOT NULL,
    `created_at` datetime NOT NULL,
    PRIMARY KEY (`id`)
);

ALTER TABLE `admins` ADD CONSTRAINT `admins_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
ALTER TABLE `courses` ADD CONSTRAINT `courses_fk5` FOREIGN KEY (`teacher_id`) REFERENCES `teachers`(`id`);
ALTER TABLE `videos` ADD CONSTRAINT `videos_fk1` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`);
ALTER TABLE `purchases` ADD CONSTRAINT `purchases_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
ALTER TABLE `purchases` ADD CONSTRAINT `purchases_fk2` FOREIGN KEY (`course_id`) REFERENCES `courses`(`id`);
ALTER TABLE `transactions` ADD CONSTRAINT `transactions_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
ALTER TABLE `user_api_tokens` ADD CONSTRAINT `user_api_tokens_fk1` FOREIGN KEY (`user_id`) REFERENCES `users`(`id`);
