-- DDL — Data Definition Language
-- Used to define database structures.

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

ALTER TABLE Person 
ALTER COLUMN gender NVARCHAR(100)

ALTER TABLE Person DROP COLUMN Email;
GO

-- RENAME TABLE Person to Student;
EXEC sp_rename "Person" , "Student";

ALTER TABLE Student 
ALTER COLUMN gender NVARCHAR(100)

SELECT * FROM Student;

-- DML — Data Manipulation Language
-- Used to manipulate data.

INSERT INTO Student VALUES ('anuj',100, 'Male');

INSERT INTO Student VALUES ('xyz',200, 'Female');

UPDATE Student SET age = 18 WHERE name= 'xyz'

DELETE FROM Student WHERE name = 'xyz'


TRUNCATE TABLE Student;
