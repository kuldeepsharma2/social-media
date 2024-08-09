-- Create the database
CREATE DATABASE login;

-- Use the created database
USE login;

-- Create the table
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    firstname VARCHAR(50),
    lastname VARCHAR(50),
    age INT,
    country VARCHAR(50)
);
