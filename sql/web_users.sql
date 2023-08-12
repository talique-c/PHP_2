-- This is used to create the table web_users
CREATE TABLE web_users (
    ID INT NOT NULL AUTO_INCREMENT,
    first_name VARCHAR(100),
    last_name VARCHAR(100),
    username VARCHAR(100),
    email VARCHAR(100),
    password VARCHAR(200),
    PRIMARY KEY (ID)
);