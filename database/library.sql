

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `aid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



INSERT INTO `admin` (`aid`, `name`, `password`) VALUES
('admin', 'Admin User', 'd033e22ae348aeb5660fc2140aec35850c4da997'),
('librarian', 'Admin', '534fc3dc50b1573791f6e96d62f18e0280ab4367');


DROP TABLE IF EXISTS `books`;
CREATE TABLE IF NOT EXISTS `books` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publisher` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
   UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;





DROP TABLE IF EXISTS `borrowed`;
CREATE TABLE IF NOT EXISTS `borrowed` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `dueDate` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `fine`;
CREATE TABLE IF NOT EXISTS `fine` (
  `fid` int(255) NOT NULL AUTO_INCREMENT,
  `sid` varchar(255) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `dueDate` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `request`;
CREATE TABLE IF NOT EXISTS `request` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  
  `sid` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactNO` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `sid` (`sid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
COMMIT;


