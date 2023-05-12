USE `ManageSys` ;

DROP TABLE IF EXISTS `assign_task` ;
DROP TABLE IF EXISTS `result` ;
DROP TABLE IF EXISTS `task` ;
DROP TABLE IF EXISTS `employee` ;
DROP TABLE IF EXISTS `dep_head` ;
DROP TABLE IF EXISTS `director` ;
DROP TABLE IF EXISTS `department` ;
DROP TABLE IF EXISTS `user` ;

CREATE TABLE user (
    id INT(11) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
    username VARCHAR(50) NOT NULL UNIQUE,
    `password` VARCHAR(50) NOT NULL,
    lv INT(6) UNSIGNED NOT NULL,
    fname VARCHAR(50) ,
    minit VARCHAR(50) ,
    lname VARCHAR(50) ,
    bdate date ,
    start_dt datetime DEFAULT CURRENT_TIMESTAMP ,
    addr VARCHAR(255) ,
    phone VARCHAR(15) ,
    email VARCHAR(50),
    salary DEC(15,3) ,
    gender ENUM('male', 'female')
) ;

CREATE TABLE department (
    dept_id INT(11) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
    dept_name VARCHAR(50) NOT NULL,
    emp_count INT(6)
) ;

CREATE TABLE director (
    id INT(11) UNSIGNED NOT NULL PRIMARY KEY ,
    title VARCHAR(50) ,
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE
) ;

CREATE TABLE dep_head (
    id INT(11) UNSIGNED NOT NULL PRIMARY KEY ,
    dept INT(11) UNSIGNED ,
    dir INT(11) UNSIGNED ,
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE ,
    FOREIGN KEY (dept) REFERENCES department(dept_id) ON DELETE SET NULL ,
    FOREIGN KEY (dir) REFERENCES director(id) ON DELETE SET NULL
) ;

CREATE TABLE employee (
    id INT(11) UNSIGNED NOT NULL PRIMARY KEY ,
    dept INT(11) UNSIGNED ,
    start_dt datetime DEFAULT CURRENT_TIMESTAMP ,
    dir INT(11) UNSIGNED ,
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE ,
    FOREIGN KEY (dept) REFERENCES department(dept_id) ON DELETE SET NULL ,
    FOREIGN KEY (dir) REFERENCES director(id) ON DELETE SET NULL    
) ;

CREATE TABLE task (
    task_id INT(20) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
    
    -- file path -> content
    tName TEXT , 
    descrip TEXT , 
    deadline datetime ,
    comment TEXT ,
    boss_id INT(11) UNSIGNED ,
    FOREIGN KEY (boss_id) REFERENCES user(id) ON DELETE SET NULL
) ;

CREATE TABLE result (
    result_id INT(20) UNSIGNED AUTO_INCREMENT NOT NULL PRIMARY KEY ,
--     NOT NULL in task_id will raise error in create table
    task_id INT(20) UNSIGNED , 
    -- file??
    -- file path
    res TEXT ,
    comment TEXT ,
    boss_id INT(11) UNSIGNED ,
    emp_id INT(11) UNSIGNED NOT NULL ,
    FOREIGN KEY (task_id) REFERENCES task(`task_id`) ON DELETE SET NULL ,
    FOREIGN KEY (boss_id) REFERENCES user(id) ON DELETE SET NULL ,
    FOREIGN KEY (emp_id) REFERENCES user(id) ON DELETE CASCADE
) ;

CREATE TABLE assign_task (
    task_id INT(20) UNSIGNED NOT NULL ,
    emp_id INT(11) UNSIGNED NOT NULL ,
    PRIMARY KEY (task_id, emp_id) ,
    FOREIGN KEY (task_id) REFERENCES task(task_id) ON DELETE CASCADE ,
    FOREIGN KEY (emp_id) REFERENCES user(id) ON DELETE CASCADE
) ;

-- $ ----------------DATA-----------------


INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('phong', 'phong0123', 1, 'Phong', 'Ky', 'Tran Trang', '1990-01-01', '123 Main St', '555-1234', 'johndoe@example.com', 5000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('dat', 'dat0123', 2, 'Jane', NULL, 'Doe', '1995-05-05', '456 Oak St', '555-5678', 'janedoe@example.com', 7500.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('bobs', 'password789', 1, 'Bob', 'G', 'Smith', '1985-12-15', '789 Maple Ave', '555-9101', 'bob.smith@example.com', 4000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('maryp', 'password101112', 3, 'Mary', NULL, 'Poppins', '1975-06-30', '1010 Cherry Ln', '555-1212', 'mary.poppins@example.com', 10000.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('johnc', 'password131415', 2, 'John', 'C', 'Smith', '1980-09-10', '1314 Pine St', '555-1414', 'john.smith@example.com', 8000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('samantha', 'password1617', 1, 'Samantha', NULL, 'Jones', '1993-08-22', '1617 Oak Ave', '555-1617', 'samantha.jones@example.com', 6000.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('jackblack', 'password1819', 2, 'Jack', NULL, 'Black', '1988-01-24', '1819 Maple Ln', '555-1819', 'jack.black@example.com', 9000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('janekim', 'password2021', 3, 'Jane', NULL, 'Kim', '1977-11-08', '2021 Pine St', '555-2021', 'jane.kim@example.com', 11000.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('toms', 'password2223', 1, 'Tom', 'J', 'Smith', '1998-04-01', '2223 Oak Ln', '555-2223', 'tom.smith@example.com', 5000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('jennab', 'password2425', 2, 'Jenna', NULL, 'Brown', '1991-02-14', '2425 Maple Ave', '555-2425', 'jenna.brown@example.com', 8000.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('markt', 'password2627', 3, 'Mark', 'T', 'Johnson', '1986-09-05', '2627 Pine Ln', '555-2627', 'mark.johnson@example.com', 12000.00, 'male');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('oliviah', 'password2829', 1, 'Olivia', 'H', 'Davis', '1996-05-17', '2829 Oak Ave', '555-2829', 'olivia.davis@example.com', 6000.00, 'female');

INSERT INTO user (username, `password`, lv, fname, minit, lname, bdate, addr, phone, email, salary, gender)
VALUES ('michaelp', 'password3031', 2, 'Michael', 'P', 'Miller', '1992-07-30', '3031 Maple Ln', '555-3031', 'michael.miller@example.com', 9000.00, 'male');



INSERT INTO department (dept_name, emp_count)
VALUES ('Sales', 0);

INSERT INTO department (dept_name, emp_count)
VALUES ('Marketing', 0);

INSERT INTO department (dept_name, emp_count)
VALUES ('Finance', 0);

INSERT INTO department (dept_name, emp_count)
VALUES ('Advertise', 0);

INSERT INTO department (dept_name, emp_count)
VALUES ('IT', 0);

-- $ DIRECTOR

INSERT INTO director (id, title)
VALUES (1, 'Director of Operations');

INSERT INTO director (id, title)
VALUES (2, 'Director of Operations');

-- $ DEPARTMENT HEAD

INSERT INTO dep_head (id, dept, dir)
VALUES (2, 1, 2);

-- $ EMPLOYEE

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (2, 1, CURRENT_TIMESTAMP, 1);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (3, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (4, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (5, 2, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (6, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (7, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (8, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (9, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (10, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (11, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (12, 1, CURRENT_TIMESTAMP, NULL);

INSERT INTO employee (id, dept, start_dt, dir)
VALUES (13, 2, CURRENT_TIMESTAMP, NULL);

