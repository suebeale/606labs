/*

bike blog database

*/

-- logon table
CREATE TABLE logon (
    loginID INT AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    email varchar(60) NOT NULL,
    password varchar(20) NOT NULL,
	constraint logon_PK_invalid PRIMARY KEY(loginID)
);


-- contact table
CREATE TABLE contact (
    contactID int AUTO_INCREMENT PRIMARY KEY,
    fullName varchar(60),
    email varchar(60),
    subject varchar(20),
    message varchar(255)
);

