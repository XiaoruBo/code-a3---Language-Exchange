CREATE TABLE `users` (
	 `id` int(11) NOT NULL AUTO_INCREMENT,
	 `username` varchar(50) NOT NULL,
	 `password` varchar(255) NOT NULL,
	 `preferred_lang` varchar(50) NOT NULL,
	 `created_at` datetime DEFAULT current_timestamp(),
	 PRIMARY KEY (`id`),
	 UNIQUE KEY `username` (`username`)
	) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4