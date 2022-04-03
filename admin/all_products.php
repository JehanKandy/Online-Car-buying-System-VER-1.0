<?php
    include("../config.php");

    $sql = "SELECT products.p_id, products.c_name, products.c_model, products.car_cc, products.price_f, products.car_status, images.img_name FROM products LEFT JOIN images ON products.p_id = images.img_id";
    $result = mysqli_query($con, $sql);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
        .img-sizejk{
            width: 120px;
            height: 100px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="user">
        <div class="user-navbar">
            <h3>
                All Products
            </h3>
            <ul>
                <li><a href="product_add.php">Products</a></li>
                <li><a href="all_users.php">Users</a></li>   
                <li><a href="admin.php">Back</a></li>                 
            </ul>
        </div>
        <div class="user-content">
            <div class="user-title">
                All Products
            </div>
        </div>
    </div>

    <div class="infor">
        <div class="infor-content">
        <a href="product_add.php"><button class="btn btn-success">Add Product</button></a>
        <br><br>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Company
                        </th>
                        <th>
                            Car Model
                        </th>
                        <th>
                            Engine Capacity 
                        </th>
                        <th>
                            Car Image
                        </th>
                        <th>
                            Price
                        </th>
                        <th>
                            Car Status
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <?php                         
                    while($row = mysqli_fetch_assoc($result)){
                        $id = $row['p_id'];
                        $company = $row['c_name'];
                        $c_model = $row['c_model'];
                        $car_cc = $row['car_cc'];
                        $price = $row['price_f'];
                        $car_status = $row['car_status'];
                        $image_path = 'images/'.$row["img_name"];
                    
                ?>
                <tr>    
                    <td>
                        <?php echo($id); ?>
                    </td>
                    <td>
                        <?php echo($company); ?>
                    </td>
                    <td>
                        <?php echo($c_model); ?>
                    </td>
                    <td>
                        <?php echo($car_cc); ?>
                    </td>
                    <td>
                        <img src="<?php echo($image_path);?>" alt="" class="img-sizejk">                        
                    </td>                    
                    <td>
                        $<?php echo($price); ?>
                    </td>
                    <td>
                        <?php
                            if($car_status == 1){
                                echo("<font color='green'>In Stock</font>");
                            }else{
                                echo("<font color='red'>Out of Stock</font>");
                            }                        
                        ?>
                    </td>
                    <td>
                    <a href="product_edit.php?id=<?php echo($row['p_id']); ?>"><button class="btn btn-primary">Edit</button></a>
                    </td>
                </tr>
                <?php }?>
            </table>
        </div>
    </div>
</body>
</html>