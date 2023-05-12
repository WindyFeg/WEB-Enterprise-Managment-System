<?php

require_once('process/dbh.php');
$sql = "SELECT user.id,user.fname,user.lname, user.salary from user";

//echo "$sql";
$result = mysqli_query($conn, $sql);

?>



<html>

<head>
    <title>Salary Table | XYZ Corporation</title>
    <link rel="stylesheet" type="text/css" href="styleview.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,500&display=swap');

        :root {
            --main-color: #8e44ad;
            --black: #222;
            --white: #fff;
            --light-black: #777;
            --light-white: #fff9;
            --dark-bg: rgba(0, 0, 0, .7);
            --light-bg: #eee;
            --border: .1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, .1);
            --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, .3);
        }

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            outline: none;
            border: none;
            text-decoration: none;
            text-transform: capitalize;
        }

        html {
            fron-size: 62.5%;
            overflow-x: hidden;
        }

        html::-webkit-scrollbar {
            width: 1rem;
        }

        html::-webkit-scrollbar-track {
            background-color: var(--white);
        }

        html::-webkit-scrollbar-thumb {
            background-color: var(--main-color);
        }

        section {
            padding: 5rem 10%;
        }


        .heading-title {
            text-align: center;
            margin-bottom: 3rem;
            font-size: 6rem;
            text-transform: uppercase;
            color: var(--black);
        }

        .header {
            position: sticky;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background-color: var(--white);
            display: flex;
            padding-top: 2rem;
            padding-bottom: 2rem;
            box-shadow: var(--box-shadow);
            align-items: center;
            justify-content: space-between;
        }

        .header .logo {
            font-size: 2.5rem;
            color: var(--black);
        }

        .header .navbar a {
            font-size: 2rem;
            margin-left: 2rem;
            color: var(--black);

        }

        .header .navbar a:hover {
            color: var(--main-color);

        }

        #menu-btn {
            font-size: 2.5rem;
            cursor: pointer;
            color: var(--black);
            display: none;
        }

        .home {
            padding: 0;
        }

        .home .slide {
            text-align: center;
            padding: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
            background-size: cover !important;
            background-position: center !important;
            min-height: 60rem;

        }

        .home .slide .content {
            width: 85rem;

        }

        .home .slide .content span {
            display: block;
            font-size: 2.2rem;
            color: var(--light-black);
        }

        .services .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(16rem, 1fr));
            gap: 1.5rem;
        }

        .services .box-container .box {
            padding: 5rem 2rem;
            text-align: center;
            background: var(--main-color);
            padding-bottom: 1rem;

        }

        .home .slide .content h3 {
            font-size: 6vw;
            color: var(--white);
            text-transform: uppercase;
            line-height: 1;
            text-shadow: var(--text-shadow);
            padding: 1rem 0;
        }

        .services .box-container .box:hover {
            background: var(--black);

        }

        .services .box-container .box img {
            height: 6rem;
        }

        .services .box-container .box a {
            color: var(--white);
            font-size: 2.7rem;
            padding-top: 1rem;
        }

        .footer {
            background: url(../images/footer-bg.jpeg) no-repeat;
            background-size: cover;
            background-position: center;


        }

        .footer .box-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(25rem, 1fr));
            gap: 3rem;

        }

        .footer .box-container .box h3 {
            color: var(--white);
            font-size: 2.5rem;
            padding-bottom: 2rem;
        }

        .footer .box-container .box a {
            color: var(--light-white);
            font-size: 1.5rem;
            padding-bottom: 1.5rem;
            display: block;
        }

        .footer .box-container .box a i {
            color: var(--main-color);
            padding-right: .5rem;
            transition: .2s linear;
        }

        .footer .box-container .box a:hover i {
            padding-right: 2rem;
        }


        /* media queries */

        @media (max-width: 1200px) {

            section {
                padding: 3rem 5%;
            }
        }

        @media (max-width: 991px) {

            html {
                font-size: 55%;
            }

            section {
                padding: 3rem 2rem;
            }
        }

        @media (max-width: 768px) {


            #menu-btn {
                display: inline-block;
                transition: .2s linear;
            }

            #menu-btn.fa-times {
                transform: rotate(180deg);
            }

            .header .navbar {
                position: absolute;
                top: 99%;
                left: 0;
                right: 0;
                background-color: var(--white);
                border-top: var(--border);
                padding: 2rem;
                transition: .2s linear;
                clip-path: polygon(0 0, 100% 0, 100% 0, 0 0);
            }

            .header .navbar.active {
                clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
            }

            .header .navbar a {
                display: block;
                margin: 2rem;
                text-align: center;
            }
        }

        @media (max-width: 450px) {

            html {
                font-size: 50%;
            }

            .heading-title {
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

        .front {
            margin: 0px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        @import url('https://fonts.googleapis.com/css?family=Lobster');
        @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700');

        body {
            margin: 0px;
        }

        header {
            background: black;
            color: white;
            padding: 8px 20px 6px 40px;
            height: 50px;
        }

        header h1 {
            display: inline;
            font-family: 'Lobster', cursive;
            font-weight: 400;
            font-size: 32px;
            float: left;
            margin-top: 0px;
            margin-right: 10px;
        }

        nav ul {
            display: inline;
            padding: 0px;
            float: right;
        }

        nav ul li {
            display: inline-block;
            list-style-type: none;
            color: white;
            float: left;
            margin-left: 12px;


        }

        nav ul li a {
            color: white;
            text-decoration: none;
        }


        nav ul ul {
            display: none;
            position: absolute;
        }

        #navli ul li ul:hovar {
            visibility: visible;
            display: block;
        }





        #navli {
            font-family: 'Montserrat', sans-serif;
        }

        .homered {
            background-color: red;
            padding: 30px 10px 22px 10px;
        }

        .divider {
            /*	background-color: red;*/
            height: 5px;
        }

        .homeblack:hover {
            background-color: blue;
            padding: 30px 10px 21px 10px;

        }

        .center {
            text-align: center;
        }

        table {
            margin: 0px;
            border-collapse: collapse;
            width: 100%;
            font-family: 'Montserrat', sans-serif;
        }

        th,
        td {
            text-align: center;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        tr:hover {
            background-color: #76D7C4;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
    <div class="divider"></div>
    <div id="divimg">
    </div>

    <table>
        <tr>
            <th class="center">Emp. ID</th>
            <th class="center">Name</th>
            <!-- 	
				
				<th align = "center">Base Salary</th>
				<th align = "center">Bonus</th> -->
            <th class="center">Salary</th>


        </tr>

        <?php
        while ($user = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>" . $user['id'] . "</td>";
            echo "<td>" . $user['fname'] . " " . $user['lname'] . "</td>";

            // echo "<td>".$user['base']."</td>";
            // echo "<td>".$user['bonus']." %</td>";
            echo "<td>" . $user['salary'] . "</td>";
        }


        ?>

    </table>
</body>

</html>