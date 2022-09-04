<?php
            include "./Connection/dbcon.php";
            include("./sidebar.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../CSS/style.css"> -->
    <!-- <link rel="stylesheet" href="../CSS/all.min.css"> -->
    <script src="../JS/Script.js"></script>
    <link rel="stylesheet" href="CSS/jquery.dataTables.min.css">
    <style>
            * {
                margin: 0;
                padding: 0;
                outline: none;
                box-sizing: border-box;
                text-decoration: none;
                font-family: 'Arizonia', cursive;
                font-family: 'Hahmlet', serif;
                font-family: 'Roboto', sans-serif;
            }

            /* Primart Colors For Background And Texts */
            :root {
                --primary-color: rgb(255, 255, 255);
                --primary-color-cards: rgb(250, 253, 255);
                --secondary-color: rgb(232, 241, 234);
                --secondary-color2: rgb(219, 255, 255);
                --text-color1: black;
                --text-color-2: white;
            }

            /* Primart Colors to toggle when dark theme is on */
            .dark-theme {
                --primary-color: rgb(66, 66, 66);
                --primary-color-cards: rgb(199, 199, 199);
                --secondary-color: rgb(138, 138, 138);
                --secondary-color2: rgb(163, 163, 163);
                --text-color1: rgb(240, 220, 220);
                --text-color-2: black;
            }




            /* Sidebar Ko lagi CSS */
            .container #sidebar {
                align-items: center;
                position: fixed;
                top: 0;
                bottom: 0;
                height: 100vh;
                left: 0;
                width: 280px;
                background-image: linear-gradient(to right top, #a4ffb5, #90ffb0, #77ffac, #56ffa9, #11ffa7);
                    border-radius: 0.5rem;
                overflow-x: hidden;
                z-index: 1;
                transition: 0.6s;
                
                box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
            }
            #sidebar.hide{
            width: 0;
            }


            nav:hover {
                width: 280px;
            }

            nav img {
                margin-bottom: 3px;
                position: relative;
                width: 40px;
                height: 20px;
                top: 20px;
                font-size: 20px;
                text-align: center;
            }
            nav .side_btn img {
                margin-bottom: 3px;
                position: relative;
                width: 40px;
                height: 20px;
                top: 20px;
                font-size: 20px;
                text-align: center;
            }

            nav a {
                position: relative;
                width: 280px;
                font-size: 20px;
                color: var(--text-color-1);
                display: table;
                padding: 10px;
            }

            .logo {
                text-align: center;
                display: flex;
                margin: 10px 0 0 10px;
                padding-bottom: 3rem;
            }

            .logo img {
                position: relative;
                width: 40px;
                height: 30px;
                top: 20px;
                font-size: 20px;
                text-align: center;
            }

            .logo span {
                color: var(--text-color1);
                text-transform: uppercase;
                font-weight: bold;
                margin-top: 10px;
                padding-left: 15px;
            }

            .nav-item {
                text-align: center;
                position: relative;
                top: 12px;
                margin-left: 10px;
            }

            a:hover {
                text-decoration: none;
                background: rgba(194, 194, 194, 0.1);
            }

            .mode {
                position: absolute;
                bottom: 100px;
            }
            .pwd_change{
        position: absolute;
        bottom:150px
        }

            .logout {
                position: absolute;
                bottom: 100px;

            }

            .container {
                display: flex;
            }

            #icon_logo {
                width: 30px;
            }

            #icon {
                bottom: 50px;
                cursor: pointer;
            }

            /* Sidebar menu Open Close Button */
            #opensidemenu {
                font-size: 2rem;
                height: 40px;
                width: 20px;

            }

            #closesidemenu {
                position: relative;
                margin-left: 220px;
                width: 20px;
                height: 30px;
            }
            #sidebar.hide ~ #main {
            width: calc(100% - 10px);
            left: 10px;
            }







             /* Main Section Where Display garincha */
             .main {
                    position: relative;
                    padding: 20px;
                    width: calc(100% - 280px);
                left: 280px;
                transition: .3s ease;
                }

                .main h1 {
                    color: var(--text-color1);
                    font-size: 3rem;
                    margin: auto;
                    text-align: center;
                    margin-bottom: 10px;
                }

                .main-top {
                    display: flex;
                    width: 100%;
                }
                .main img {
                    margin-bottom: 3px;
                    position: relative;
                    width: 40px;
                    height: 20px;
                    top: 20px;
                    font-size: 20px;
                    text-align: center;
                }
                .main-top i {
                    position: absolute;
                    right: 0;
                    margin: 10px 30px;
                    color: gray;
                    cursor: pointer;
                }

                .main .users {
                    display: flex;
                    justify-content: space-around;
                    flex-wrap: wrap;
                    width: 100%;
                }

                .users .card {
                    overflow-x: auto;
                    overflow-y: auto;
                    /* width: 35%; */
                    flex: 1 1 200px;
                    /* Jaba DIsplay Ko size Ghatcha Taba Auto Matically cardsa ko size adjust huncha (flex-grow,shrink and width */
                    margin: 10px;
                    background: rgb(255, 255, 255);
                    text-align: center;
                    border-radius: 10px;
                    padding: 10px;
                    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
                }

                .users .card img {
                    width: 100px;
                    height: 100px;
                    border-radius: 25%;

                }

                .users .card h4 {
                    color: var(--text-color1);
                    text-transform: uppercase;
                    text-align: center;
                }

                .users .card p {
                    color: var(--text-color1);
                    text-transform: uppercase;
                    font-size: 15px;
                    margin-bottom: 15px;
                }

                .users table {
                    margin: auto;
                }

                .users .per span {
                    color: var(--text-color1);
                    padding: 5px;
                    /* background: rgb(255, 255, 250); */
                }

                .users td {
                    text-align: center;
                    font-size: 15px;
                    padding-right: 20px;
                }

                .users table a {
                    cursor: pointer;
                    text-emphasis: none;
                    text-decoration: none;
                }

                .users .card #btn_view {
                    position: relative;
                    width: 130px;
                    height: 45px;
                    background-color: var(--primary-color);
                    color: var(--text-color1);
                    margin-top: 15px;
                    background: var(--primary-color);
                    border-radius: 10px;
                }

                .users .card a:hover {
                    cursor: pointer;
                    background: var(--primary-color-cards);
                    color: var(--text-color-1);
                    transition: 0.2s;
                }

            /* <!-- crud  table css --> */

                    .t_table {
                        width: 100%;
                        border-collapse: collapse;
                    }

                    .t_table td,
                    .t_table th {
                        padding: 12px 15px;
                        border: 1px solid #ddd;
                        text-align: center;
                        font-size: 16px;
                    }

                    .t_table th {
                        background-color: darkblue;
                        color: #ffffff;
                    }

                    .t_table tbody tr:nth-child(even) {
                        background-color: var(--secondary-color2);
                    }





                    /*responsive*/


                    @media(max-width: 500px) {
                        .t_table thead {
                            display: none;
                        }

                        .t_table,
                        .t_table tbody,
                        .t_table tr,
                        .t_table td {
                            display: block;
                            width: 100%;
                            overflow: auto;
                        }

                        .t_table tr {
                            margin-bottom: 15px;
                        }


                        .t_table td {
                            text-align: right;
                            padding-left: 50%;
                            text-align: right;
                            position: relative;
                        }

                        .t_table td::before {
                            content: attr(data-label);
                            position: absolute;
                            left: 0;
                            width: 50%;
                            padding-left: 15px;
                            font-size: 15px;
                            font-weight: bold;
                            text-align: left;
                        }
                    }
    </style>
    <title>View Inventory</title>
</head>

<body>
    <div class="container">





        <!-- Main Section / Table Section -->

              <section class="sidebar" id="sidebar">
                <nav id="side">


                     <!-- <i class="fas fa-solid fa-xmark" id="closesidemenu" onclick="closesidemenu()" class="sidemenuicon"></i> -->

                     <!-- <img src="./icons/close.svg" class="fas sidemenuicon" id="closesidemenu" onclick="closesidemenu()" alt=""> -->

                     <!-- Specifix designation lai specific option dekhauna ko lagi -->

                     <ul>
                                    <?php
                            echo '

                            <li>
                                <a href="#" class="logo">

                                    <span class="nav-item"> Hi, ' . $_SESSION['name'] . '</span>
                                </a>
                            </li>';


                            echo '

                            <li>
                                <a href="dashboard.php">
                                    <!-- <i class="fas fa-solid fa-house"></i> -->
                                    <img src="icons/home_icon.svg" class="fas" alt="">
                                    <span class="nav-item">Home</span>
                                </a>
                            </li>
                            ';

                            if ($_SESSION['designation'] == 'Admin') {

                                echo '

                            <li>
                                <a href="OP1_manageemployee.php">
                                    <!-- <i class="fas fa-solid fa-plus-minus"></i> -->
                                    <img src="icons/plus.svg" class="fas" alt="">
                                    <span class="nav-item">Manage Employee</span>
                                </a>
                            </li>
                            ';
                            echo '

                                <li>
                                    <a href="OP11_viewinventory.php">
                                        <!-- <i class="fas fa-solid fa-eye"></i> -->
                                        <img src="icons/view.svg" class="fas" alt="">
                                        <span class="nav-item">View Inventory</span>
                                    </a>
                                </li>
                                ';

                            }
                            if ($_SESSION['designation'] == 'Pharmacist') {


                                echo '

                                <li>
                                    <a href="OP5_ViewEmployee.php">
                                        <!-- <i class="fas fa-solid fa-eye"></i> -->
                                        <img src="icons/view.svg" class="fas" alt="">
                                        <span class="nav-item">View Employee</span>
                                    </a>
                                </li>
                                ';
                            }




                            if ($_SESSION['designation'] == 'Pharmacist') {
                                echo '

                                <li>
                                    <a href="OP6_manageinventory.php">
                                        <!-- <i class="fas fa-solid fa-plus-minus"></i> -->
                                        <img src="icons/plus.svg" class="fas" alt="">
                                        <span class="nav-item">Manage Inventory</span>
                                    </a>
                                </li>
                                ';
                            }









                            if ($_SESSION['designation'] == 'Pharmacist') {
                                echo '

                            <li>
                                <a href="OP13_managesupp.php">
                                    <!-- <i class="fas fa-solid fa-plus-minus"></i> -->
                                    <img src="icons/plus.svg" class="fas" alt="">
                                    <span class="nav-item">Manage Supplier</span>
                                </a>
                            </li>
                            ';
                            }


                            if ($_SESSION['designation'] == 'Admin') {

                                echo '

                            <li>
                                <a href="OP18_viewsupp.php">
                                    <!-- <i class="fas fa-solid fa-eye"></i> -->
                                    <img src="icons/view.svg" class="fas" alt="">
                                    <span class="nav-item">View Supplier</span>
                                </a>
                            </li>
                            ';
                            }
                            echo '

                            <li>
                                <a href="notepad.php">
                                    <!-- <i class="fas fa-solid fa-right-from-bracket"></i> -->
                                    <img src="icons/info.svg" class="fas" alt="">
                                    <span class="nav-item">Notepad</span>
                                </a>
                            </li>
                            ';
              

          
                                        if ($_SESSION['designation'] == 'Pharmacist') {
                                            echo '
            
                                                    <!-- Dark Mode  -->
                                                    <li>
                                                        <a href="OP20_Leave_Req.php" class="mode" id="icon">
                                                            <!-- <i class="fas fa-solid fa-right-from-bracket"></i> -->
                                                            <img src="icons/leave.svg" class="fas" alt="" id="icon_logo">
                                                            <span class="nav-item">Request leave</span>
                                                        </a>
                                                    </li>
                                                    ';
                                                    }
            
                                                    if ($_SESSION['designation'] == 'Admin') {
                                                        echo '
                                        
                                                                <!-- Dark Mode  -->
                                                                <li>
                                                                    <a href="OP21_manageleave.php" class="mode" id="icon">
                                                                        <!-- <i class="fas fa-solid fa-right-from-bracket"></i> -->
                                                                        <img src="icons/leave.svg" class="fas" alt="" id="icon_logo">
                                                                        <span class="nav-item">Leave Requests</span>
                                                                    </a>
                                                                </li>
                                                                ';
                                                                }

                            echo '

                            <li>
                                <a href="logout.php" class="logout">
                                    <!-- <i class="fas fa-solid fa-right-from-bracket"></i> -->
                                    <img src="icons/logout.svg" class="fas" alt="">
                                    <span class="nav-item">Logout</span>
                                </a>
                            </li>
                            ';

                            



                             ?>
                </ul>
                 </nav>
              </section>




        <section class="main" id="main">
            <!-- <i class="fa-solid fa-bars" id="opensidemenu" onclick="opensidemenu()" class="sidemenuicon"></i> -->
            <!-- <img src="./icons/menu.svg" id="opensidemenu" onclick="opensidemenu()" class="fas sidemenuicon" alt=""> -->
            <div class="side_btn">
                            <img src="icons/menu.svg" class="side_btn" id="opensidemenu" onclick="opensidemenu()" class="fas sidemenuicon" alt="">
                        </div>

            <div class="main-top">
                <h1>Inventory Section</h1>
            </div>



            <div class="t_users">
                <table class="t_table" id="crud_table">
                    <thead>
                        <th>S.N</th>
                        <th>Medicine Name</th>
                        <th>Medicine Type</th>
                        <th>Purchase Date</th>
                        <th>Expiry Date</th>
                        <th>Purchase Quantity(Pcs.)</th>
                        <th>Purchase Rate(per Pcs.)</th>
                        <th>Purchase Amount(NRS.)</th>
                        <th>Payment Made(NRS.)</th>
                        <th>Pending Payment</th>
                        <th>Last Changed By</th>
                        <th>Seller</th>
                        <th>Expiry Status</th>
                        <th>Stock Status</th>

                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM `medicine_record`";
                        $result = mysqli_query($con, $sql);
                        $count1 = 1;
                        $counte= 0;
                        while ($row = mysqli_fetch_assoc($result)) {

                            $med_type_id=$row['med_type'];
                            $sql2="SELECT `type`   FROM `medicine_type` where `id`=$med_type_id";
                            $result2 = mysqli_query($con, $sql2);

                            while($row2=mysqli_fetch_assoc($result2)){
                                $med_type= $row2['type'];
                            }


                            $id = $row['id'];
                            $med_name = $row['med_name'];
                           
                            $date_of_purchase = $row['date_of_purchase'];
                            $expiry_date = $row['expiry_date'];
                            $purchase_quantity = $row['total_purchase_quantity'];
                            $purchase_rate = $row['purchase_rate'];
                            $purchase_amount = $row['total_purchase_amount'];
                            $total_payment = $row['total_payment'];
                            $pending_amount = $row['pending_payment'];
                            $entered_by = $row['entered_by'];
                            $remaining_quantity = $row['remaining_quantity'];
                            $seller = $row['seller'];



                            $today_date = date("Y/m/d");


                            $td = strtotime($today_date);
                            $exp_date = strtotime($expiry_date);



                            if ($exp_date == '') {
                                $status = "No data Available ";
                            } elseif ($exp_date < $td) {
                                $status = 'Prodyct Expired';
                            } elseif ($exp_date > $td) {
                                $status = 'product Unexpired';
                            }

                            //Check If Out Of Stock

                            if ($remaining_quantity == '') {
                                $r_status = "No data Available ";
                            } elseif ($remaining_quantity <= 0) {
                                $r_status = 'Out Of Stock';
                            } elseif ($remaining_quantity > 0) {
                                $r_status = 'In Stock';
                            }

                            // =========== Important Is Here=========
                            // =====================================





                            //Print Imported Data
                            echo '
                        <tr>
                            <td data-label="S.N">' . $count1 . '</td>
                            <td data-label="name">' . $med_name . '</td>
                            <td data-label="med_type">' . $med_type . '</td>
                            <td data-label="date_of_purchase">' . $date_of_purchase . '</td>
                            <td data-label="expiry_date">' . $expiry_date . '</td>
                            <td data-label="purchase_quantity">' . $purchase_quantity . '</td>
                            <td data-label="purchase_rate">' . $purchase_rate . '</td>
                            <td data-label="purchase_amount">' . $purchase_amount . '</td>
                            <td data-label="total_payment">' . $total_payment . '</td>
                            <td data-label="pending_amount">' . $pending_amount . '</td>
                            <td data-label="entered_by">' . $entered_by . '</td>
                            <td data-label="seller">' . $seller . '</td>
                            <td data-label="expiry_status">' .  $status . '</td>
                            <td data-label="stock_status">' . $r_status . '</td>


                        </tr>';
                            $count1++;
                        }
                        ?>










                    </tbody>
                </table>
            </div>




        </section>

    </div>

    <script src="JS/jquery.js"></script>
    <script src="JS/jquery.dataTables.min.js"></script>
    <script src="JS/Script.js"></script>
    <script>
        $(document).ready( function () {
    $('#crud_table').DataTable();
} );
    </script>
</body>

</html>
