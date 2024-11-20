-- CREATE DATABASE stars;
-- USE stars;

-- CREATE TABLE users (
  -- id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  -- username VARCHAR(50),
  -- pass VARCHAR(50)
-- );


-- INSERT INTO users
-- (username, userspass)
-- VALUES 
-- ("zirnits", "zirnis123");

-- SELECT * FROM users;

-- CREATE TABLE stars (
-- id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
-- image VARCHAR(255),
-- userid INT
-- );

INSERT INTO stars
(userid, image)
VALUES 
(1, "stars1.png");

SELECT * FROM stars;