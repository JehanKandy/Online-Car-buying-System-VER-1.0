<?php
    include("../config.php");

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $sql = "SELECT products.p_id, products.c_name, products.c_model, products.car_cc, products.price_f, products.car_status, images.img_name FROM products LEFT JOIN images ON products.p_id = images.img_id WHERE products.p_id = '$id'";
        $result = mysqli_query($con, $sql);

        $nor = mysqli_num_rows($result);
        if($nor > 0){
            while($row = mysqli_fetch_assoc($result)){
                $c_name = $row['c_name'];
                $c_model = $row['c_model'];
                $car_cc = $row['car_cc'];
                $price_f = $row['price_f'];
                $image_path = '../admin/images/'.$row["img_name"];            
            }
            $new_price = $price_f * (10/100);

        }
    }  
    


    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        .img-sizejk{
            width: 220px;
            height: 180px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <a href="products.php">back</a>
<center>
    <br><br>
    <h2>Car CheckOut</h2>
    <h3>JK Car Company</h3>
    <br>
    <hr width="50%">
    <br>

    <table border="0">
        <tr>
            <td>
                <b>Car Manufacturer</b>
            </td>
            <td>
                &nbsp&nbsp : &nbsp&nbsp
            </td>
            <td>
                <?php echo $c_name; ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>Car Model</b>
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
                <b>Car Engine Capacity </b>
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
                <b>Car Price </b>
            </td>
            <td>
                &nbsp&nbsp : &nbsp&nbsp
            </td>
            <td>
                $&nbsp<?php echo $price_f; ?>
            </td>
        </tr>
        <tr>
            <td>
                <b>Discount  </b>
            </td>
            <td>
                &nbsp&nbsp : &nbsp&nbsp
            </td>
            <td>
                10% (for online order)
            </td>
        </tr>
        <tr>
            <td>
                <b>Car payment Price  </b>
            </td>
            <td>
                &nbsp&nbsp : &nbsp&nbsp
            </td>
            <td>
                $&nbsp<?php echo $new_price; ?>
            </td>
        </tr>      
        <tr>
            <td>
                <b>Car Image </b>
            </td>
            <td>
                &nbsp&nbsp : &nbsp&nbsp
            </td>
            <td>
                <img src="<?php echo $image_path; ?>" alt="" class="img-sizejk">
            </td>
        </tr>   
    </table>
    <br><br>
    <hr width="50%">
    <br><br><br><br><br>
    <h4><font color = "red">Important**</font></h4>
    <p>when you came to buy car you must bring hard copy of this</p>
    <br><br><br><br>
    <table border="0">
        <tr>
            <td>
                ..............................................................................
            </td>
            <td>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td>
                ..............................................................................
            </td>
            <td>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td>
                <?php 
                    date_default_timezone_set('Asia/Kolkata');
                    $date = date('d-m-y h:i:s');
                    echo $date;
                ?>
            </td>
        </tr>
        <tr>
            <td align="center">
            Customer Signature
            </td>
            <td>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td align="center">
                Seller Signature
            </td>
            <td>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            </td>
            <td align="center">
                Date
            </td>
        </tr>
    </table>
    <br><br><br>
    <button class="btn btn-primary" onclick="window.print()">Print</button>
    <br><br><br>
</center>
    



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>