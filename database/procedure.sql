USE `ManageSys` ;

DROP PROCEDURE IF EXISTS `addComment` ;
DELIMITER @@
CREATE PROCEDURE `addComment` (
    IN id INT, 
    IN isTask BOOLEAN, 
    IN cmt TEXT
)
BEGIN
    IF isTask = true THEN 
        UPDATE task SET comment = cmt WHERE task_id = id ;
    ELSE 
        UPDATE result SET comment = cmt WHERE result_id = id ;
    END IF ;
END @@

DROP FUNCTION IF EXISTS `takeComment` ;
DELIMITER @@
CREATE FUNCTION `takeComment` (
    id INT, 
    isTask BOOLEAN, 
)
RETURN TEXT 
BEGIN
    DECLARE cmt TEXT ;
    IF isTask = true THEN
        SELECT comment INTO cmt 
        FROM task WHERE task_id = id ;
    ELSE
        SELECT comment INTO cmt 
        FROM result WHERE result_id = id ;
    END IF ;
    RETURN cmt ;
END @@
