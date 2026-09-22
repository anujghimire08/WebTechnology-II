CREATE DATABASE DDL;

USE DDL;

CREATE TABLE Person (
    name VARCHAR NOT NULL,
    age INT NOT NULL,
    gender NVARCHAR NOT NULL,
)

SELECT * FROM Person ;

ALTER TABLE Person ADD Email NVARCHAR(10);

ALTER TABLE Person 
ALTER COLUMN name NVARCHAR(100)

ALTER TABLE Person DROP COLUMN Email;
GO

-- RENAME TABLE Person to Student;
EXEC sp_rename "Person" , "Student";


SELECT * FROM Student;

