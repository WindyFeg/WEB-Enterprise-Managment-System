-- USE `ManageSys`

CREATE TABLE user (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
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

CREATE TABLE director (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    title VARCHAR(50) ,
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE
) ;

CREATE TABLE dep_head (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    dept INT(11) ,
    dir INT(11),
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE ,
    FOREIGN KEY (dept) REFERENCES department(dept_id) ON DELETE SET NULL ,
    FOREIGN KEY (dir) REFERENCES director(id) ON DELETE SET NULL
) ;

CREATE TABLE employee (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    dept INT(11) ,
    start_dt datetime DEFAULT CURRENT_TIMESTAMP ,
    dir INT(11) ,
    FOREIGN KEY (id) REFERENCES user(id) ON DELETE CASCADE ,
    FOREIGN KEY (dept) REFERENCES department(dept_id) ON DELETE SET NULL ,
    FOREIGN KEY (dir) REFERENCES director(id) ON DELETE SET NULL    
) ;

CREATE TABLE department (
    dept_id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    dept_name VARCHAR(50) NOT NULL,
    emp_count INT(6)
) ;

CREATE TABLE task (
    task_id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    descrip LONGBLOB ,
    deadline datetime ,
    comment TEXT ,
    boss_id INT(11) ,
    FOREIGN KEY (boss_id) REFERENCES user(id) ON DELETE SET NULL ,
) ;

CREATE TABLE result (
    result_id INT(20) UNSIGNED AUTO_INCREMENT PRIMARY KEY ,
    task_id INT(11) NOT NULL ,
    -- file??
    res LONGBLOB NOT NULL ,
    comment TEXT ,
    boss_id INT(11),
    emp_id INT(11) NOT NULL ,
    FOREIGN KEY (task_id) REFERENCES task(task_id) ON DELETE SET NULL ,
    FOREIGN KEY (boss_id) REFERENCES user(id) ON DELETE SET NULL ,
    FOREIGN KEY (emp_id) REFERENCES user(id) ON DELETE CASCADE
) ;

CREATE TABLE assign_task (
    task_id INT(20) NOT NULL ,
    emp_id INT(11) NOT NULL ,
    PRIMARY KEY (task_id, emp_id) ,
    FOREIGN KEY (task_id) REFERENCES task(task_id) ON DELETE CASCADE ,
    FOREIGN KEY (emp_id) REFERENCES user(id) ON DELETE CASCADE
) ;