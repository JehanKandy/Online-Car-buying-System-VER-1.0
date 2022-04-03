<?php
    include("../config.php");
    
    $user_sql = "SELECT * FROM user_tbl";
    $user_result = mysqli_query($con, $user_sql);
    $user_nor = mysqli_num_rows($user_result);

    $product_sql = "SELECT * FROM products";
    $product_result = mysqli_query($con, $product_sql);
    $product_nor = mysqli_num_rows($product_result);

    $image_sql = "SELECT * FROM images";
    $image_result = mysqli_query($con, $image_sql);
    $image_nor = mysqli_num_rows($image_result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Permanent+Marker&family=Teko&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .admin{
            width: 100%;
            height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url(../images/old_car.jpg);
            background-size: cover;
            background-position: center;
        }
        .admin h3{
            color: white;
            font-family: 'Anton', sans-serif;
            font-size: 200%;
        }
        .admin-navbar{
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .admin-navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }
        .admin-navbar ul li a{
            text-decoration: none;
            color: #fff;
            font-family: 'Anton', sans-serif;
        }
        .admin-content{
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #fff;
        }
        .admin-title{
            font-size: 70px;
            line-height: 100px;
            font-weight: bold;
            height: 100px;
            text-align: left;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Lobster', cursive;
            overflow: hidden;
        }
        .footer {
            width: 100%;
            height: 50vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url(../images/footer_old.jpg);
            background-size: cover;
            background-position: center;
        }

        .footer-content {
            text-align: center;
            align-items: center;
        }

        .footer th {
            color: #ffc107;
            font-family: 'Permanent Marker', cursive;
        }

        .footer td p {
            color: #ffc107;
            font-family: 'Permanent Marker', cursive;
        }

        .footer td a {
            color: #ffc107;
            text-decoration: none;
            font-family: 'Permanent Marker', cursive;
        }

        .footer font {
            font-family: 'Permanent Marker', cursive;
        }

        .footer-hr {
            border-radius: 0;
        }

        .footer-copy {
            color: #ffc107;
            text-align: left;
        }
        .infor{
            padding-top: 5%;
            padding-bottom: 5%;
            padding-left: 5%;
            padding-right: 5%;
        }
        .infor h2{
            font-size: 300%;
            font-family: 'Lobster', cursive;
        }
        .infor img{
            border: 0;
            border-radius: 5px;
        }
        .infor p{
            font-family: 'Teko', sans-serif;
        }
        .infor .box1{
            width: 200px;
            height: 140px;
            background-image: u;
            padding: 10px;
            border-radius: 5px;
            border: 0;
            background-color: #ffc107;
            margin: 0;
            text-align: center;
        }
        .box1 p,a{
            font-size: 120%;
            font-family: 'Teko', sans-serif;
            color: #fff;
            text-decoration: none;
        }
        .box1 p,a:hover{
            font-size: 150%;
            font-family: 'Teko', sans-serif;
            color: black;
            text-decoration: none;
        }


        .infor .box1:hover{
            border: 0;
            padding: 10px;
            box-shadow: 4px 5px 5px 4px #888888;
        }
        .infor .box2{
            width: 200px;
            height: 140px;
            background-color: #ffc107;
            padding: 10px;
            border-radius: 5px;
            border: 0;
            margin: 0;
        }
        .box2 p,a{
            font-size: 120%;
            font-family: 'Teko', sans-serif;
            color: #fff;
            text-decoration: none;
        }
        .box2 p,a:hover{
            font-size: 150%;
            font-family: 'Teko', sans-serif;
            color: black;
            text-decoration: none;
        }
        .infor .box2:hover{
            border: 0;
            padding: 10px;
            box-shadow: 4px 5px 5px 4px #888888;
        }
    </style>
</head>
<body>
    <div class="admin">
        <div class="admin-navbar">
            <h3>
                Admin Panel 
            </h3>
            <ul>
                <li><a href="product_add.php">Products</a></li>
                <li><a href="all_users.php">Users</a></li>   
                <li><a href="../login/logout.php">Logout</a></li>                 
            </ul>
        </div>
        <div class="admin-content">
            <div class="admin-title">
                Admin Panel
            </div>
        </div>
    </div>
        <div class="infor">
            <div class="infor-content">


                <table border="0">
                    <tr>
                        <td>
                            <a href="all_images.php"><div class="box1">
                                <p>Images Manage
                                <br>
                                <font size="12"><?php echo $image_nor ; ?></font>
                                </p>
                            </div>
                            </a>
                        </td>
                        <td>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </td>
                        <td>
                            <a href="all_products.php"><div class="box1">
                                <p>Product Manage
                                <br>
                                <font size="12"><?php echo $product_nor ; ?></font>
                                </p>
                            </div>
                            </a>
                        </td>
                        <td>
                            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                        </td>
                        
                        <td>
                            <a href="all_users.php"><div class="box1">
                                <p>User Manage
                                <br>
                                <font size="12"><?php echo $user_nor ; ?></font>
                                </p>
                            </div>
                            </a>
                        </td>
                    </tr>
                </table>


            </div>
        </div>



    <div class="footer">
            <div class="footer-content">
                <center>
                    <br><br><br><br><br>
                    <table border="0">
                        <tr>
                            <th>
                                <h3>JK CARs</h3>
                            </th>
                            <th>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </th>
                            <th>
                                <h3>About Us</h3>
                            </th>
                            <th>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </th>
                            <th>
                                <h3>Useful Links</h3>
                            </th>
                            <th>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </th>
                            <th>
                                <h3>Contact As</h3>
                            </th>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <img src="../images/i8.jpg" alt="" width="150px" height="120px">
                            </td>
                            <td>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </td>
                            <td>
                                <p>We are JehanKandy <br> Car Company</p>
                            </td>
                            <td>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </td>
                            <td>
                                <a href="#" target="_blank">Link 1</a><br>
                                <a href="#" target="_blank">Link 2</a><br>
                                <a href="#" target="_blank">Link 3</a><br>
                                <a href="#" target="_blank">Link 4</a><br>
                            </td>
                            <td>
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                
                            </td>
                            <td>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                            </svg> &nbsp<font color="#ffc107">+94 711758851</font>
                            <br><br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
                            </svg> &nbsp<font color="#ffc107">jehankandy@gmail.com</font>
                            <br><br>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#ffc107" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                            </svg> &nbsp<font color="#ffc107">29/3/A, Megodagama, <br> &nbsp&nbsp&nbsp&nbsp Menikhinna.</font>
                            </td>

                        </tr>

                    </table>
                </center>
                <br><br><br><br><br>
                <hr class="footer-hr" width="50%" color="#ffc107">
                <p class="footer-copy" font-family="'Permanent Marker', cursive;">Copyright &copy; || JehanKandy - 2022</p>
            </div>
        </div>
</body>
</html>