<script>
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
                    <a>
                        <svg class="deadline-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0-192c-8.8 0-16 7.2-16 16v80c0 8.8 7.2 16 16 16s16-7.2 16-16V288c0-8.8-7.2-16-16-16z" />
                        </svg>
                        Deadline 1
                    </a>
                </div>
                <div class="deadline_tab">
                    <a>
                        <svg class="deadline-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0-192c-8.8 0-16 7.2-16 16v80c0 8.8 7.2 16 16 16s16-7.2 16-16V288c0-8.8-7.2-16-16-16z" />
                        </svg>
                        Deadline 4
                    </a>
                </div>
                <div class="deadline_tab">
                    <a>
                        <svg class="deadline-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0-192c-8.8 0-16 7.2-16 16v80c0 8.8 7.2 16 16 16s16-7.2 16-16V288c0-8.8-7.2-16-16-16z" />
                        </svg>
                        Deadline 3
                    </a>
                </div>
                <div class="deadline_tab">
                    <a>
                        <svg class="deadline-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384v38.6C310.1 219.5 256 287.4 256 368c0 59.1 29.1 111.3 73.7 143.3c-3.2 .5-6.4 .7-9.7 .7H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128zm48 96a144 144 0 1 1 0 288 144 144 0 1 1 0-288zm0 240a24 24 0 1 0 0-48 24 24 0 1 0 0 48zm0-192c-8.8 0-16 7.2-16 16v80c0 8.8 7.2 16 16 16s16-7.2 16-16V288c0-8.8-7.2-16-16-16z" />
                        </svg>
                        Deadline 2
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="mn_employeeList">
        <div class="mn_employee_container">
            <div class="btn_assign">
                <button class="btn_employee">
                    Assign Task
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
                <button onclick={AddComment()} class="btn comment_btn">Comment </button>
            </div>
        </div>
    </div>
    <div class="mn_detail">
        <div class="mn_detail_container">
            <div class="detail_view">
                KY PHONG
            </div>
            <div class="detail_refresh">
                <button class="btn refresh_btn">Refresh</button>
            </div>
        </div>
    </div>
    <div class="mn_assign">
        <div class="mn_assign_container">
            <div class="assign_view">
                <div class="assign_taskName">Web Assignment</div>
                <div class="assign_fileName">Assignment Specification</div>
                <div class="assign_taskInfo">Submitted date: 11/5
                    File size: 1.2Mb
                </div>
            </div>
            <div class="assign_function">
                <!-- <button class="btn assign_btn">
                    <svg id="assign-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                        <path
                            d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z" />
                    </svg>

                    Assign
                </button>
                <button disabled style="visibility: hidden;">
                    <form action="../database/uploadtask.php" method="post" enctype="multipart/form-data">
                        <input id="fileinput" type="file" style="display:none;" name="userfile" />
                    </form>
                    <button id="falseinput" class="btn file_btn" type="submit">
                        <svg id="file-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                            <path
                                d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z" />
                        </svg>
                        File
                    </button>
                    <span id="selected_filename">No file selected</span>
                </button> -->

                <form action="../database/uploadtask.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="file" name="userfile" id="userfile" />
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Upload" class="btn btn-info" />
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function () {
        $('#falseinput').click(function () {
            $("#fileinput").click();
        });
    });
    $('#fileinput').change(function () {
        $('#selected_filename').text($('#fileinput')[0].files[0].name);
        AddTask($('#fileinput')[0].files[0])
    });


    function AddComment() {
        cmt = document.getElementById("comment_input").value;
        document.getElementById("comment_input").value = "";
        document.getElementsByClassName("comment_view")[0].innerHTML
            += "<div>Me: " + cmt + "</div>";


        // add to database section
    }

    function home() {
        header("location: ../index.php?page=manage");
    }



</script>