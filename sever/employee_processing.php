<?php
// Connect to the database
include_once '../database/database.php';

// Request
$DepartmentId = $_REQUEST["manageid"];
if ($DepartmentId != 0) {
    $sql = "SELECT * FROM `employee` AS e, (SELECT * FROM `user` AS u LEFT JOIN (SELECT  emp_id,tName,descrip,deadline,comment,boss_id,at.task_id	 FROM `assign_task` AS at, `task` AS t WHERE at.task_id = t.task_id) AS t ON u.id = t.emp_id 
    ) AS m WHERE m.id =  e.id AND dept = $DepartmentId";
    $result = $conn->query($sql);
}
// SELECT * FROM `task` AS t, (SELECT * FROM `assign_task` AS at, `user` AS u WHERE at.emp_id = u.id ) AS a, `employee` AS e WHERE t.task_id = a.task_id AND e.id =a.id AND dept = 1

// SELECT * FROM `user` AS u 
// LEFT JOIN `assign_task`AS t
// ON u.id = t.task_id

// SELECT * FROM `user` AS u LEFT JOIN (SELECT * FROM `assign_task` AS at, `task` AS t WHERE at.task_id = t.task_id) AS t ON u.id = t.task_id

// SELECT  emp_id,tName,descrip,deadline,comment,boss_id	 FROM `assign_task` AS at, `task` AS t WHERE at.task_id = t.task_id

if ($result->num_rows > 0) {
    header("Content-type: text/xml");
    while ($row = $result->fetch_assoc()) {

        $typeOfEmp = "";
        if ($row["lv"] == 1) {
            $typeOfEmp = "elc_red";
        } else if ($row["lv"] == 2) {
            $typeOfEmp = "elc_yellow";
        } else {
            $typeOfEmp = "elc_green";
        }

        if ($row["task_id"] == null) {
            $row["task_id"] = "NONE";
        }
        echo "<tr class='employee_level_color $typeOfEmp' name=" . $row["id"] . " onclick={ClickOnEmployee(" . $row["task_id"] . "," . $row["id"] . ")}>";
        echo "<td  > <input type='checkbox' class='employee_checkbox' name=" . $row["id"] . "> </input></td>";
        echo "<td >" . $row["fname"] . "</td>";
        echo "<td > " . $row["lv"] . "</td>";
        if (isset($row["tName"])) {
            echo "<td > <a href='../database/downloadtask.php?path=" . $row["descrip"] . "'>" . $row["tName"] . "</a></td>";
        } else {
            echo "<td >" . "NONE" . "</td>";
        }
        echo "<td >7" . $row["id"] . "</td>";
        echo "<td >None</td>"
        ;
        echo "<td >" . $row["bdate"] . "</td>"
        ;
        echo "</tr>";
    }
} else {
    echo '<tr class="employee_level_color elc_red" >';
    echo '<td > <input type="checkbox"> </input></td>';
    echo '<td >NO EMPLOYEE FOUND !!!</td>';
    echo '<td >?</td>';
    echo '<td >?</td>';
    echo '<td >?</td>';
    echo '<td >None</td>'
    ;
    echo '<td >1 Feb</td>'
    ;
    echo '</tr>';
}

$conn->close();