CREATE TABLE users (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    email varchar(255),
    PRIMARY KEY (id)
);

INSERT INTO users (name, email)
VALUES ('Daniel', 'david@test.ch')