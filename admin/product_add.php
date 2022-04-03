<?php
    include_once("../config.php");

    if(isset($_POST['submit'])){
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $id = $_POST['id'];
            $company = $_POST['company'];
            $c_model = $_POST['c_model'];
            $car_cc = $_POST['car_cc'];
            $price = $_POST['price'];

            if(empty($id)){
                $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Car ID can not be empty</div>&nbsp</center>";                
            }elseif(empty($c_model)){
                $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Car Model can not be empty</div>&nbsp</center>";                
            }elseif(empty($car_cc)){
                $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Car CC can not be empty</div>&nbsp</center>";
            }elseif(empty($price)){
                $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Car Price can not be empty</div>&nbsp</center>";
            }else{
                $insert_sql = "INSERT INTO products(p_id,c_name,c_model,car_cc,price_f,car_status)VALUE('$id','$company','$c_model','$car_cc','$price','1')";
                $insert_result = mysqli_query($con, $insert_sql);
                $msg[] = "<center>&nbsp<div class='alert alert-success col-10' role='alert'>Car Insert Successfully</div>&nbsp</center>";
                
                if($insert_result){
                    $msg[] = "<center>&nbsp<div class='alert alert-success col-10' role='alert'>Car Insert Successfully</div>&nbsp</center>";
                }
                else{
                    $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Error while Car Inserting</div>&nbsp</center>";
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
    <title>Products</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Permanent+Marker&family=Teko&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .product{
            width: 100%;
            height: 90vh;
            background-image: linear-gradient(rgba(0, 0, 0, 0.85), rgba(0, 0, 0, 0.85)), url(../images/new1.jpg);
            background-size: cover;
            background-position: center;
        }
        .product h3{
            color: white;
            font-family: 'Anton', sans-serif;
            font-size: 200%;
        }
        .product-navbar{
            width: 85%;
            margin: auto;
            padding: 35px 0;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .product-navbar ul li{
            list-style: none;
            display: inline-block;
            margin: 0 20px;
            position: relative;
        }
        .product-navbar ul li a{
            text-decoration: none;
            color: #fff;
            font-family: 'Anton', sans-serif;
        }
        .product-content{
            width: 100%;
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            text-align: center;
            color: #fff;
        }
        .product-title{
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
        .form1{
            padding-top: 5%;
            padding-bottom: 5%;
            padding-left: 5%;
            padding-right: 5%;
        }
        </style>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="product">
        <div class="product-navbar">
        <h3>JK Car Company</h3>
            <ul>
                <li><a href="admin.php">Back</a></li>                
            </ul>
        </div>
        <div class="product-content">
            <div class="product-title">
                Add Products
            </div>
        </div>
    </div>


    <div class="form1">
                <?php
                    if(isset($msg)){
                        foreach($msg as $msg){
                            echo($msg);
                        }
                    }
                ?>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-12">
                        <label for="carid">Car ID:</label>
                        <input type="number" name="id" placeholder="Car ID" class="form-control">
                    </div>
                <div class="form-group col-md-6">
                <label for="inputEmail4">Manufacturer</label>
                <select name="company" class="form-control">
                    <option value="BMW">BMW</option>
                    <option value="Audi">Audi</option>
                    <option value="Benz">Benz</option>
                    <option value="Ford">Ford</option>                    
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="inputEmail4">Car Model</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Car Model" name="c_model">
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Car Engine Capacity</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Engine Capacity" name="car_cc">
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Car Price</label>
                <input type="number" class="form-control" id="inputEmail4" placeholder="Price" name="price">
            </div>
            <br><br>
            <div class="form-group col-md-6">
                <input type="reset" class="btn btn-secondary btn-lg btn-block" id="inputEmail4" value="Clear">
            </div>
            <div class="form-group col-md-6">
                <input type="submit" class="btn btn-success btn-lg btn-block" id="inputEmail4" value="Add" name="submit">
            </div>
        </form>
    </div>



</body>
</html>