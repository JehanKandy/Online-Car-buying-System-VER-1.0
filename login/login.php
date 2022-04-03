<?php

    include("../config.php");
    
    if(isset($_POST['login'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $user = $_POST['user'];
            $pass = md5($_POST['pass']);
            
            $sql = "SELECT username, pass1, user_type, user_status FROM user_tbl WHERE username = '$user' && pass1 = '$pass'";
            $result = mysqli_query($con,$sql);

            $nor = mysqli_num_rows($result);


            if($nor > 0){
                $row = mysqli_fetch_assoc($result);
                if($row['user_status'] == 1){
                    if($row['user_type'] == 'admin'){
                        header('location:../admin/admin.php');
                    }
                    else{
                        header("location:../all_files/login_index.php");
                    }
                }else{
                    $error[] = "Account Deactivate";
                }
            }
         
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
    <style>
        .error {
            margin: 10px 0;
            display: block;
            background: rgba(255, 0, 0, 0.57);
            color: white;
            border-radius: 10px;
            font-size: 20px;
            padding: 10px;
            width: 50%;
        }
    </style>
</head>
<body>
<div class="log-banner">
        <div class="log-navbar">
            <h3>JK Car Company</h3>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../history.php">History</a></li>
                <li><a href="#">Login</a></li>                
            </ul>
        </div>
        <div class="content">
            <div class="title">
                Login
            </div>
        </div>
    </div>

    <center>
    <div class="login">
            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo("<p class='error'>".$error."</p>");
                    }
                }
            ?>
        <div class="login-content">
            <form action="" method="POST">
                <div class="login-s">
                    <table border="0">
                        <tr>
                            <td>
                                <input type="text" name="user" placeholder="Enter Username" size="50">
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input type="password" name="pass" placeholder="Enter Password" size="50">
                            </td>
                        </tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
                        <tr></tr>
    
                        <tr></tr>
                        <tr></tr>
                        <tr>
                            <td>
                                <input type="submit" value="Login" class="login-submit" size="20" name="login">
                            </td>
                        </tr>
                    </table>
                    </form>
                    <br><br><br>
                    <p>
                        Doesn't have an account? <a href="reg.php">Create One</a>
                    </p>

                </div>


                                
            </div>
        </div>
    </div>
    </center>






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