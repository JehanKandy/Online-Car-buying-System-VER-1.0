<?php

    include("../config.php");

    $sql = "SELECT * FROM user_tbl";
    $result = mysqli_query($con, $sql);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Permanent+Marker&family=Teko&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .user{
            width: 100%;
            height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url(../images/new2.jpg);
            background-size: cover;
            background-position: center;
        }
        .user h3{
            color: white;
            font-family: 'Anton', sans-serif;
            font-size: 200%;
        }
        .user-navbar{
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .user-navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }
        .user-navbar ul li a{
            text-decoration: none;
            color: #fff;
            font-family: 'Anton', sans-serif;
        }
        .user-content{
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #fff;
        }
        .user-title{
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="user">
        <div class="user-navbar">
            <h3>
                All Users
            </h3>
            <ul>
                <li><a href="product_add.php">Products</a></li>
                <li><a href="all_users.php">Users</a></li>   
                <li><a href="admin.php">Back</a></li>                 
            </ul>
        </div>
        <div class="user-content">
            <div class="user-title">
                All Users
            </div>
        </div>
    </div>

    <div class="infor">
        <div class="infor-content">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            First Name
                        </th>
                        <th>
                            Last Name
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            User Type
                        </th>
                        <th>
                            User Status
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                    <?php 
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){

              
                    ?>
                <tr>    
                    <th scope="row">
                        <?php echo($row['id']); ?>
                    </th>
                    <td>
                        <?php echo($row['fname']); ?>
                    </td>
                    <td>
                        <?php echo($row['lname']); ?>
                    </td>
                    <td>
                        <?php echo($row['username']); ?>
                    </td>
                    <td>
                        <?php echo($row['email']); ?>
                    </td>
                    <td>
                        <?php echo($row['user_type']); ?>
                    </td>                    
                    <td>
                        <?php
                            if($row['user_status'] == 1){
                                echo "<font color='green'>Account Actived</font>";
                            }else{
                                echo "<font color='red'>Account Deactivated</font>";
                            }
                        ?>
                    </td>
                    <td>
                    <a href="user_edit.php?id=<?php echo($row['id']); ?>"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                <?php
                        }
                    }
                ?>
            </table>
        </div>
    </div>


</body>
</html>