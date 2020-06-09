CREATE TABLE contact (
    contactID int AUTO_INCREMENT PRIMARY KEY,
    fullName varchar(60),
    email varchar(60),
    subject varchar(20),
    message varchar(255)
);

INSERT INTO contact (fullName, email, subject, message)
VALUES ('Sue Beale', 'Sue.Beale@wintec.ac.nz', 'problem', 'Cant logon to complete the lab');

DELETE FROM contact WHERE contactID = 1;

UPDATE contact
SET fullName = 'Sue Pearson', 
email = 'suepy67@gmail.com'
WHERE contactID = 1;

SELECT * 
FROM contact;

SELECT * 
FROM contact;

SELECT * 
FROM contact
where contactID = 1;

SELECT * 
FROM contact
where UPPER(subject) like UPPER('prob%');