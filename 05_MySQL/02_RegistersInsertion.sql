-- --- DB CREATION -----
-- DROP TABLE users
-- CREATE TABLE users (id INT AUTO_INCREMENT, name varchar(100) NOT NULL, email varchar(100) NOT NULL, PRIMARY KEY (id))

-- SHOW tables;
describe users;
SELECT * FROM users;

-- ---- Adding registers ----
INSERT INTO users VALUES(null, 'Carlos', 'Carlos@gmail.com');

INSERT INTO users (id, name) VALUES(null, 'Maria');

INSERT INTO users (id, name, email) VALUES(null, 'Luna', 'lunaaa@gmail.com');

UPDATE users SET email = 'maria@gmail.com' WHERE id = 3;