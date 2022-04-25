CREATE TABLE users(
    userId int PRIMARY KEY AUTO_INCREMENT,
    firstName varchar(20) not null,
    lastName varchar(20) not null,
    userName varchar(20) not null unique,
    email varchar(30) not null unique,
    motPasse varchar(255) not null,
);