<script>
    function GetAllDeadline(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.response);
                document.getElementsByClassName("deadline_tab")[0].innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../sever/deadline_processing.php?userid=" + id, true);
        xhttp.send();
    }

    function GetAllEmployeeByDepartment(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                console.log(this.response);
                document.getElementById("employee_list").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "../sever/employee_processing.php?manageid=" + id, true);
        xhttp.send();
    }
</script>

<div class="manage">
    <div class="mn_deadline">
        <div class="mn_deadline_container">
            <div class="navigate">
                <button class="navigate_home" onclick={home()}>
                    <a href="http://localhost/index.php?page=home">Home</a>
                </button>

                <button class="navigate_home navigate_home-white">My Deadline</button>
            </div>
            <div class="list_deadline">
                <h3>
                    WindyFeng
                </h3>
                <h5 style="color: #DF0000; font-weight:400; ">
                    My Deadline
                    <svg id="downarrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path
                            d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
                    </svg>
                </h5>
                <div class="deadline_tab">

                    <?php
                    $id = $_SESSION['id'];
                    echo "<script>", "GetAllDeadline($id);", "</script>"
                        ?>
                </div>
            </div>
        </div>
    </div>
    <div class="mn_employeeList">
        <div class="mn_employee_container">
            <div class="btn_assign">
                <button class="btn_employee" onclick={AssignListEmployee()}>
                    Assign Task
                </button>
                <button class="btn_employee" onclick={DeleteTask()}>
                    Delete Task
                </button>
                <button class="btn_employee">
                    Approve Task
                </button>
                <button class="btn_employee">
                    Decline Task
                </button>
                <button class="btn_employee">
                    Rework
                </button>
            </div>
            <div class="list_employee">
                <div id="table-wrapper">
                    <div id="table-scroll">
                        <table>
                            <thead>
                                <tr class="employee_level_color">
                                    <td class="tg-0lax">N</td>
                                    <td class="tg-0lax">Name</td>
                                    <td class="tg-0lax">Level</td>
                                    <td class="tg-0pky">Task Name</td>
                                    <td class="tg-0pky">Employee ID</td>
                                    <td class="tg-0pky">Result</td>
                                    <td class="tg-0pky">Deadline</td>
                                </tr>
                            </thead>
                            <tbody id="employee_list">
                                <?php
                                echo "<script>", "GetAllEmployeeByDepartment(" . $_SESSION['manageid'] . ");", "</script>"
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <table class="tg">

                </table>
            </div>
        </div>
    </div>
    <div class="mn_comment">
        <div class="mn_comment_container">
            <div class="comment_view">
                Boss: do it again!
            </div>
            <div>
                <input type="text" id="comment_input">
                <button onclick={AddCommentTask()} class="btn comment_btn">Comment </button>
            </div>
        </div>
    </div>
    <div class="mn_detail">
        <div class="mn_detail_container">
            <div class="detail_view">
            </div>
            <div class="detail_refresh">
                <button class="btn refresh_btn">Refresh</button>
            </div>
        </div>
    </div>
    <div class="mn_assign">
        <div class="mn_assign_container">
            <div class="assign_view">
                <div class="assign_taskName">Name task: </div>
                <div class="assign_fileName">File size: </div>
                <div class="assign_taskInfo">
                    Deadline:
                    <input type="date" id="deadline" disabled>
                </div>
                <div id="uploadnotify" style="color: red;"> Please select employee to upload task!</div>
            </div>
            <div class="assign_function">


                <?php
                if (isset($_SESSION['lv'])) {
                    $lv = $_SESSION['lv'];
                    if ($lv == 1) {
                        echo ' <div class="form-group">
                        <input type="file" name="userfile" id="userfile" disabled />
                    </div><div class="form-group">
                        <input id="submitfile" type="submit" onclick={AssignTaskToListEmployee()} name="submit"
                            value="Upload task" class="btn btn-info" disabled>
                    </div>';
                    } else {
                        echo '<div class="form-group">
                    <input type="file" name="userfile" id="userfile"  />
                </div>
                <div class="form-group">
                    <input id="submitfile" type="submit" onclick={UploadResult()} name="submit" value="Upload Result"
                        class="btn btn-info" >
                </div>';
                    }
                } else {
                    echo "There is something wrong when you login!";
                }
                ?>


            </div>

        </div>
    </div>
</div>


<script>
    var listEmployeeId = [];

    $(document).ready(function () {
        $('#falseinput').click(function () {
            $("#fileinput").click();
        });
    });
    $('#fileinput').change(function () {
        $('#selected_filename').text($('#fileinput')[0].files[0].name);
        AddTask($('#fileinput')[0].files[0])
    });

    document.getElementById('userfile').addEventListener('change', function () {
        document.getElementById('submitfile').disabled = false;
    });

    function ClickOnEmployee(taskid, id) {
        getCmtEmployee(taskid);
        getTaskDetail(taskid);
    }

    function getTaskDetail(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            let now = new Date();
            let timeStr = now.toLocaleTimeString();
            document.getElementsByClassName("detail_view")[0].innerHTML += timeStr + ": " + this.responseText;
        }
        xhttp.open("GET", "../sever/task_detail.php?data=" + id, true);
        xhttp.send();
    }

    function getCmtEmployee(id) {
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementsByClassName("comment_view")[0].innerHTML = this.responseText;
        }
        cmt = "";
        xhttp.open("GET", "../sever/comment_processing.php?data=" + id + "//" + cmt, true);
        xhttp.send();
    }

    function AddCommentTask() {
        //! temp
        id = document.getElementsByClassName("comment_view")[0].innerText.split("TaskID: ")[1].split("\n")[0];

        cmt = document.getElementById("comment_input").value;
        document.getElementById("comment_input").value = "";

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementsByClassName("comment_view")[0].innerHTML = this.responseText;
        }
        xhttp.open("GET", "../sever/comment_processing.php?data=" + id + "//" + cmt, true);
        xhttp.send();
    }

    function home() {
        header("location: ../index.php?page=manage");
    }

    function UploadResult() {
        var file = document.getElementById('userfile').files[0];
        var formData = new FormData();
        formData.append('userfile', file);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../database/uploadresult.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let now = new Date();
                let timeStr = now.toLocaleTimeString();
                document.getElementsByClassName("detail_view")[0].innerHTML += "<div>" + timeStr + ": " + xhr.responseText + "</div>";
            }
        };
        xhr.send(formData);
    }

    function AssignListEmployee() {
        var ListEmployee = document.getElementsByClassName("employee_checkbox");
        var Listchecked = [];
        for (let i = 0; i < ListEmployee.length; i++) {
            if (ListEmployee[i].checked) {
                Listchecked.push(ListEmployee[i]);
            }
        }
        let now = new Date();
        let timeStr = now.toLocaleTimeString();

        document.getElementsByClassName("detail_view")[0].innerHTML += "<div class='assign_notify'>" + timeStr + ": " + Listchecked.length + " Employee selected </div>"
        for (let i = 0; i < Listchecked.length; i++) {
            listEmployeeId.push(Listchecked[i].name);
        }
        console.log(listEmployeeId);
        UploadPermission(true);

    }

    function DeleteTask() {
        AssignListEmployee(); // Get list employee id
        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            document.getElementsByClassName("detail_view")[0].innerHTML = this.responseText;
        }
        xhttp.open("GET", "../sever/delete_task.php?data=" + listEmployeeId.join(','), true);
        xhttp.send();
    }

    function UploadPermission(bool) {

        document.getElementById("uploadnotify").style.visibility = "hidden";
        document.getElementById("deadline").disabled = !bool;
        document.getElementById("submitfile").disabled = !bool;
        document.getElementById("userfile").disabled = !bool;

    }


    function AssignTaskToListEmployee() {

        var file = document.getElementById('userfile').files[0];
        var formData = new FormData();
        formData.append('userfile', file);

        var xhr = new XMLHttpRequest();
        xhr.open('POST', '../database/uploadtask.php', true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                let now = new Date();
                let timeStr = now.toLocaleTimeString();
                document.getElementsByClassName("detail_view")[0].innerHTML += "<div>" + timeStr + ": " + xhr.responseText + "</div>";
            }
        };
        xhr.send(formData);

        //!____________________________

        const xhttp = new XMLHttpRequest();
        xhttp.onload = function () {
            let now = new Date();
            let timeStr = now.toLocaleTimeString();
            document.getElementsByClassName("detail_view")[0].innerHTML += "<div> " + timeStr + ": " + this.responseText + "</div>";
            UploadPermission(false);
        }
        xhttp.open("GET", "../sever/assign_processing.php?idlist=" + listEmployeeId.join(','), true);
        xhttp.send();
        let now = new Date();
        let timeStr = now.toLocaleTimeString();
        document.getElementsByClassName("detail_view")[0].innerHTML += "<div>" + timeStr + ": " + " Processing...</div>";
    }

</script>