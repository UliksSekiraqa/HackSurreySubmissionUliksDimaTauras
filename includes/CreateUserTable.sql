CREATE TABLE `users` (
 `UserID` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `Email` varchar(254) NOT NULL,
 `Forename` varchar(255) NOT NULL,
 `Surname` varchar(255) NOT NULL,
 `Registration_date` date NOT NULL,
 `Date_of_birth` date DEFAULT NULL,
 `Password_hash` varchar(255) NOT NULL,
 `Location` varchar(255) DEFAULT NULL,
 `Rating` decimal(10,0) DEFAULT NULL,
 `Telephone` varchar(255) NOT NULL,
 `Gender` varchar(15) DEFAULT NULL,
 PRIMARY KEY (`UserID`),
 UNIQUE KEY `email` (`Email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1
