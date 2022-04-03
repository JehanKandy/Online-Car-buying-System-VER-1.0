<?php
    include("../config.php");

    if(isset($_POST['update'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $id = $_POST['id'];
            $new_price = $_POST['price'];
            $new_status = $_POST['car_status'];

            $sql = "UPDATE products SET price_f = '$new_price',car_status = '$new_status' WHERE p_id = '$id'";
            $result_update = mysqli_query($con, $sql);
            header("location:all_products.php");
            

        }
    }

    if(isset($_GET['id'])){
        $p_id = $_GET['id'];

        $sql_all = "SELECT * FROM products WHERE p_id = '$p_id'";
        $result1 = mysqli_query($con, $sql_all);

        $nor = mysqli_num_rows($result1);
        if($nor > 0){
            while($row = mysqli_fetch_assoc($result1)){
                $company = $row['c_name'];
                $c_model = $row['c_model'];
                $car_cc = $row['car_cc'];
                $price = $row['price_f'];
                $car_status = $row['car_status'];
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
    <title>Edit Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <form action="<?php echo($_SERVER["PHP_SELF"])?>" method="post">
            <center>
                <div class="card">
                    <div class="card-header">
                        <h3>Edit Car Infor</h3>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <table border="0">
                                <tr>
                                    <td>
                                        Car ID
                                        <input type="hidden" name="id" value="<?php echo $p_id; ?>">                                        
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>
                                        <?php echo $p_id; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Car Company
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>    
                                        <?php echo $company; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Car Model
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>
                                        <?php echo $c_model; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Car Engine Capacity
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>
                                        <?php echo $car_cc; ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Price
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>
                                        <input type="number" name="price" value="<?php echo $price; ?>" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        Car Status
                                    </td>
                                    <td>
                                        &nbsp&nbsp : &nbsp&nbsp
                                    </td>
                                    <td>
                                        <input type="number" name="car_status" value="<?php echo $car_status; ?>" class="form-control">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3">
                                        <input type="submit" value="Update" name="update" class="btn btn-success">
                                    </td>
                                </tr>
                            </table>                            
                        </div>
                    </div>
                </div>
            </center>
        </form>

        Without Updating<a href="all_products.php"><button class="btn btn-primary">Back</button></a>
    </div>
</div>




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>