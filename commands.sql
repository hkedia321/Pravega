CREATE TABLE contactus(
	id int NOT NULL AUTO_INCREMENT,
	name varchar(50) NOT NULL,
	email varchar(60) NOT NULL,
	message text NOT NULL,
	insdate varchar(100) NOT NULL,
	visible int NOT NULL DEFAULT 1,
	PRIMARY KEY(id)
);

CREATE TABLE subscribe(
	id int NOT NULL AUTO_INCREMENT,
	email varchar(60) NOT NULL,
	insdate varchar(100) NOT NULL,
	visible int NOT NULL DEFAULT 1,
	PRIMARY KEY(id)
);