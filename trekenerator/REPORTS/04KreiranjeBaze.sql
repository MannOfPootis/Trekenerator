CREATE DATABASE TREKENERATOR
GO
CREATE TABLE account(
    id int(50) IDENTITY(0,1) PRIMARY KEY,
    first_name nvarchar(50),
    last_name nvarchar(50),
    username nvarchar(50),
    password nvarchar(255)

)
CREATE TABLE location(
    id int(50) IDENTITY(0,1) PRIMARY KEY,
    name nvarchar(50),
    height int(50),
    poster int FOREIGN KEY REFERENCES account(id)

)
Create TABLE PATH (
    id int(50) IDENTITY(0,1) PRIMARY key,
    length int(50),
    location1 int(50) FOREIGN KEY REFERENCES location location(id),
    location2 int(50) FOREIGN KEY REFERENCES location location(id)

)