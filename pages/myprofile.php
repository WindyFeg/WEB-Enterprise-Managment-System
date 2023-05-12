<?php

require_once ('process/dbh.php');
$sql = "SELECT * FROM `user`";

//echo "$sql";
$result = mysqli_query($conn, $sql);


  $id = (isset($_GET['id']) ? $_GET['id'] : '');
  $sql = "SELECT * from `user` ";
  $sql2 = "SELECT * from 'department' Where employee.dept = department.dept_id";
  // $sql2 = "SELECT salary from `user`" ;
  $result = mysqli_query($conn, $sql);
  // $result2 = mysqli_query($conn , $sql2);
  // $dept = mysqli_fetch_array($result2);
  // $empS = ($dept['dept_names']);
 
  if($result){
  while($res = mysqli_fetch_assoc($result)){
  $firstname = $res['fname'];
  $lastname = $res['lname'];
  $email = $res['email'];
  $contact = $res['phone'];
  $address = $res['addr'];
  $gender = $res['gender'];
  $birthday = $res['bdate'];
  // $nid = $res['nid'];
  // $dept = $res['dept'];
  $salary = $res['salary'];
  $degree = $res['lv'];
  // $pic = $res['pic'];
}
}

?>

<html>
<head>
  <title>My Profile | XYZ Corporation</title>
  <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="main.css" rel="stylesheet" media="all">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');

:root{
    --main-color: #8e44ad;
    --black: #222;
    --white: #fff;
    --light-black: #777;
    --light-white: #fff9;
    --dark-bg: rgba(0,0,0,.7);
    --light-bg: #eee;
    --border:.1rem solid var(--black);
    --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
    --text-shadow:0 1.5rem 3rem rgba(0,0,0,.3);
}

*{
    font-family: 'Poppins', sans-serif;
    margin: 0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-decoration: none;
    text-transform: capitalize;
}

html{
    fron-size: 62.5%;
    overflow-x: hidden;
}
html::-webkit-scrollbar{
    width:1rem;
}
html::-webkit-scrollbar-track{
    background-color: var(--white);
}
html::-webkit-scrollbar-thumb{
    background-color: var(--main-color);
}

section{
    padding: 5rem 10%;
}


.heading-title{
    text-align: center;
    margin-bottom: 3rem;
    font-size: 6rem;
    text-transform: uppercase;
    color: var(--black);
}

.header{
    position: sticky;
    top:0; left: 0;right: 0;
    z-index: 1000;
    background-color: var(--white);
    display: flex;
    padding-top: 2rem;
    padding-bottom: 2rem;
    box-shadow: var(--box-shadow);
    align-items: center;
    justify-content: space-between;
}

.header .logo{
    font-size:  2.5rem;
    color: var(--black);
}

.header .navbar a{
    font-size: 2rem;
    margin-left: 2rem;
    color: var(--black);

}
.header .navbar a:hover{
    color: var(--main-color);

}
#menu-btn{
    font-size: 2.5rem;
    cursor: pointer;
    color: var(--black);
    display: none;
}

.home{
    padding: 0;
}
.home .slide{
    text-align: center;
    padding: 2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    background-size: cover !important;
    background-position: center !important;
    min-height: 60rem;

}

.home .slide .content{
    width: 85rem;

}

.home .slide .content span{
    display: block;
    font-size: 2.2rem;
    color:  var(--light-black);
}
.services .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
    gap: 1.5rem;
}
.services .box-container .box{
    padding: 5rem 2rem;
    text-align: center;
    background: var(--main-color);
    padding-bottom: 1rem;

}

.home .slide .content h3{
    font-size: 6vw;
    color: var(--white);
    text-transform: uppercase;
    line-height: 1;
    text-shadow: var(--text-shadow);
    padding: 1rem 0;
}

.services .box-container .box:hover{
    background: var(--black);

}
.services .box-container .box img{
    height: 6rem;
}

.services .box-container .box a{
    color: var(--white);
    font-size: 2.7rem;
    padding-top: 1rem;
}

.footer{
    background: url(../images/footer-bg.jpeg) no-repeat;
    background-size: cover;
    background-position: center;
    
    
}
.footer .box-container{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
    gap: 3rem;

}

.footer .box-container .box h3{
    color: var(--white);
    font-size: 2.5rem;
    padding-bottom: 2rem;
}

.footer .box-container .box a{
    color: var(--light-white);
    font-size: 1.5rem;
    padding-bottom: 1.5rem;
    display: block;
}

.footer .box-container .box a i{
    color: var(--main-color);
    padding-right: .5rem;
    transition: .2s linear;
}

.footer .box-container .box a:hover i{
    padding-right: 2rem;
}


/* media queries */

@media (max-width: 1200px){

    section{
        padding: 3rem 5%;
    }
}

@media (max-width: 991px){

    html{
        font-size: 55%;
    }

    section{
        padding: 3rem 2rem;
    }
}

@media (max-width: 768px){


    #menu-btn{
        display: inline-block;
        transition:  .2s linear;
    }

    #menu-btn.fa-times{
        transform: rotate(180deg);
    }
    .header .navbar{
        position: absolute;
        top: 99%; left: 0;right: 0;
        background-color: var(--white);
        border-top: var(--border);
        padding: 2rem;
        transition: .2s linear;
        clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
    }

    .header .navbar.active{
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    .header .navbar a{
        display: block;
        margin: 2rem;
        text-align: center;
    }
}

@media (max-width: 450px){

    html{
        font-size: 50%;
    }

.heading-title{
        font-size: 3.5rem;
    }
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 200px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    padding: 12px 0px;
    z-index: 1;
    max-height: 150px;
    overflow-y: auto;
}
.front{
    margin: 0px;
}
.dropdown:hover .dropdown-content {
    display: block;
}
    </style>
</head>
<body>
  <section class="header">
        <a href="home.php" class="logo">Comany</a>  
        <nav>
            <!-- <h1>Department name: <?php //echo $departmentName[0]['dept']; ?></h1> -->
            <ul class="navbar">
                <li><a href="http://localhost/web-main/index.php">HOME</a></li>
              
            <!-- <span>Department</span> -->
                <li><a href="myprofile.php">My profile</a></li>

                <li><a class="" href="alogin.html">Log Out</a></li>
               

            </ul>
        </nav>
    </section>
  
  <div class="divider"></div>
  

    <!-- <form id = "registration" action="edit.php" method="POST"> -->
  <div class="page-wrapper bg-blue p-t-100 p-b-100 font-robo">
        <div class="wrapper wrapper--w680">
            <div class="card card-1">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">My Info</h2>
                    <form method="POST" action="myprofileup.php?id=<?php echo $id?>" >

                        <div class="input-group">
                          <img src="process/<?php echo $pic;?>" height = 150px width = 150px>
                        </div>


                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>First Name</p>
                                     <input class="input--style-1" type="text" name="firstName" value="<?php echo $firstname;?>" readonly >
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Last Name</p>
                                    <input class="input--style-1" type="text" name="lastName" value="<?php echo $lastname;?>" readonly>
                                </div>
                            </div>
                        </div>





                        <div class="input-group">
                          <p>Email</p>
                            <input class="input--style-1" type="email"  name="email" value="<?php echo $email;?>" readonly>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Date of Birth</p>
                                    <input class="input--style-1" type="text" name="birthday" value="<?php echo $birthday;?>" readonly>
                                   
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                  <p>Gender</p>
                                  <input class="input--style-1" type="text" name="gender" value="<?php echo $gender;?>" readonly>
                                </div>
                            </div>
                        </div>
                        
                        <div class="input-group">
                          <p>Contact Number</p>
                            <input class="input--style-1" type="number" name="contact" value="<?php echo $contact;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>NID</p>
                            <input class="input--style-1" type="number" name="nid" value="<?php echo $nid;?>" readonly>
                        </div>

                        
                         <div class="input-group">
                          <p>Address</p>
                            <input class="input--style-1" type="text"  name="address" value="<?php echo $address;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>Department</p>
                            <input class="input--style-1" type="text" name="dept" value="<?php echo $empS;?>" readonly>
                        </div>

                        <div class="input-group">
                          <p>Degree</p>
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $degree;?>" readonly>
                        </div>


                        <div class="input-group">
                          <p>Salary</p>
                            <input class="input--style-1" type="text" name="degree" value="<?php echo $salary;?>" readonly>
                        </div>

                        <input type="hidden" name="id" id="textField" value="<?php echo $id;?>" required="required"><br><br>
                        <div class="p-t-20">
                            <button class="btn btn--radius btn--green"  name="send" >Update Info</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>


     <!-- Jquery JS-->
    <!-- <script src="vendor/jquery/jquery.min.js"></script>
   
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

   
    <script src="js/global.js"></script> -->
</body>
</html>
