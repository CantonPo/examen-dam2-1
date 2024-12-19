CREATE DATABASE IF NOT EXISTS testdb;

CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    password VARCHAR(50),
);


INSERT INTO users (name, password) VALUES ('Dani', '1234'), ('Makram', '5678');


