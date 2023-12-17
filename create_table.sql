CREATE DATABASE myDatabase;
USE myDatabase;
CREATE TABLE Users (
    id INT AUTO_INCREMENT,
    name VARCHAR(100),
    email VARCHAR(100),
    gender VARCHAR(10),
    hobbies VARCHAR(255),
    PRIMARY KEY(id)
);