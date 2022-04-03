<?php

    include_once("../config.php");

    $image_dir = "images/";



    if(isset($_POST['submit'])){

        if($_SERVER["REQUEST_METHOD"] == "POST"){

            if(!empty($_FILES["file"]["name"])){
                $id = $_POST['id'];
                $filename = basename($_FILES["file"]["name"]);
                $image_target_path = $image_dir . $filename;
                $filetype = pathinfo($image_target_path, PATHINFO_EXTENSION);


                $image_types = array('jpg','png','jpeg','gif','PNG');
                
                if(in_array($filetype, $image_types)){

                    if(move_uploaded_file($_FILES["file"]["tmp_name"], $image_target_path)){

                        $image_insert = "INSERT INTO images(img_id,img_name) VALUES('$id','$filename')";

                        $insert_result = mysqli_query($con, $image_insert);
                        
                        if($insert_result){
                            $msg[] = "<center>&nbsp<div class='alert alert-success col-10' role='alert'>Image Uploaded Successfully</div>&nbsp</center>";
                        }else{
                            $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Sorry, Try Again</div>&nbsp</center>";
                        }                 
                    }
                    else{
                        $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Error While uploading the image</div>&nbsp</center>";
                    }
                }else{
                    $msg[] = "<center>&nbsp<div class='alert alert-danger col-10' role='alert'>Unsported file extension</div>&nbsp</center>";
                    
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
    <title>Add Car Images</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Anton&family=Lobster&family=Permanent+Marker&family=Teko&display=swap');
        *{
            margin: 0;
            padding: 0;
        }
        .product{
            width: 100%;
            height: 90vh;
            background-image: url(../images/new3.jpg);
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

<br><br><br><br>


<div class="container">
    <div class="row">
        <div class="card col-md-6">
            <div class="card-header">
                <h4>Add Car Images</h4>
            </div>
            <?php 
                if(isset($msg)){
                    foreach($msg as $msg){
                        echo($msg);
                    }
                }
            
            ?>
            <div class="body">
                <form action="<?php echo($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="id">Image ID:</label>
                        <input type="number" name="id" placeholder="Image ID" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="imagen">Image:</label>
                        <input type="file" name="file" class="form-control" accept="image/*">
                    </div>
                    <div>
                        <input type="submit" value="Insert" name="submit" class="btn btn-primary">
                    </div>
                </form>
                <br><br>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>



</body>
</html>
