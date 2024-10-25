CREATE DATABASE db_tran_thu_ha;

USE db_tran_thu_ha;

CREATE TABLE record (
    id INT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);
ALTER TABLE record ADD ImageUrl VARCHAR(255);