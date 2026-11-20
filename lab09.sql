DROP DATABASE IF EXISTS exhibition_db;
CREATE DATABASE exhibition_db;
USE exhibition_db;

CREATE TABLE cars (
    car_id INT AUTO_INCREMENT PRIMARY KEY,
    make VARCHAR(25),
    model VARCHAR(40),
    price FLOAT,
    yom INT
);

INSERT INTO cars (car_id, make, model, price, yom) VALUES
(NULL, 'Holden', 'Astra', 14000, 2009),
(NULL, 'BMW', 'X3', 35000, 2010),
(NULL, 'Ford', 'Falcon', 39000, 2013),
(NULL, 'Toyota', 'Corolla', 20000, 2012),
(NULL, 'Holden', 'Commodore', 28000, 2009);

SELECT 'Task 4 - Query 1' AS step;
SELECT * FROM cars;

SELECT 'Task 4 - Query 2' AS step;
SELECT make, model, price FROM cars ORDER BY make, model;

SELECT 'Task 4 - Query 3' AS step;
SELECT make, model FROM cars WHERE price >= 20000;

SELECT 'Task 4 - Query 4' AS step;
SELECT make, AVG(price) FROM cars GROUP BY make;

SELECT 'Task 4 - Query 5' AS step;
SELECT make, model FROM cars WHERE price < 15000 AND price > 10000;
