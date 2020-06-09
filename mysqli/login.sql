CREATE TABLE logon (
    loginID INT AUTO_INCREMENT,
    username varchar(20) NOT NULL,
    email varchar(60) NOT NULL,
    password varchar(20) NOT NULL,
	constraint logon_PK_invalid PRIMARY KEY(loginID)
);

INSERT INTO logon (username, email, password)
VALUES ('suebeale', 'sue.beale@wintec.ac.nz', 'phpisfun');


UPDATE logon
SET password = 'sqlisfun'
WHERE loginID = 1;

DELETE FROM logon 
WHERE loginID = 1;

SELECT *
FROM logon;

SELECT *
FROM logon
WHERE loginID = 2;

SELECT * 
FROM logon
where UPPER(email) like UPPER('%wintec%');


