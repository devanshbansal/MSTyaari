Create table users(
id int(10) NOT NULL AUTO_INCREMENT,
fname VARCHAR(50) UNIQUE NOT NULL,
lname VARCHAR(50) UNIQUE NOT NULL,
email VARCHAR(50) UNIQUE NOT NULL,
address VARCHAR(100) UNIQUE NOT NULL,
homephone VARCHAR(50) UNIQUE NOT NULL,
cellphone VARCHAR(50) UNIQUE NOT NULL,
CONSTRAINT PRIMARY KEY(id));

Create table admin(
email VARCHAR(50) UNIQUE NOT NULL,
password VARCHAR(50) UNIQUE NOT NULL,
CONSTRAINT PRIMARY KEY(email));

Create table mostvisited(
    id int(10) UNIQUE NOT NULL,
    name VARCHAR(50) UNIQUE NOT NULL,
    image VARCHAR(50) UNIQUE NOT NULL,
    cost int(10) NOT NULL,
    count int(10),
    CONSTRAINT PRIMARY KEY(id));

--     INSERT INTO products (id,name,calories,image,count)
-- email VARCHAR(50) UNIQUE NOT NULL,
-- password VARCHAR(50) UNIQUE NOT NULL,
-- CONSTRAINT PRIMARY KEY(email));

INSERT INTO admin VALUES ('admin@gmail.com', 'admin@123');
