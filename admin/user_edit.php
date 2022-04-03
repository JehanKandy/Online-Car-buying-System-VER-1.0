<?php
    include("../config.php");
    if(isset($_POST['update'])){
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $n_id = $_POST['id'];
            $u_type = $_POST['u_type'];
            $u_status = $_POST['u_status'];

            $update_sql = "UPDATE user_tbl SET user_type = '$u_type', user_status =  '$u_status' WHERE id = '$n_id'";
            $update_result = mysqli_query($con, $update_sql);
            header("location:all_users.php");    
        }
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        
        $select_sql = "SELECT * FROM user_tbl WHERE id ='$id'";
        $select_result = mysqli_query($con, $select_sql);

        $nor = mysqli_num_rows($select_result);
        if($nor > 0){
            while($row = mysqli_fetch_assoc($select_result)){
                $fn = $row['fname'];
                $ln = $row['lname'];
                $usern = $row['username'];
                $email = $row['email'];
                $address = $row['address_o'];
                $user_type = $row['user_type'];
                $status = $row['user_status'];                
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
    <title>Edit User</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">
                <h3>Edit User</h3>
            </div>
            <div class="card-body">
                <form action="<?php echo($_SERVER["PHP_SELF"])?>" method="POST">
                    <table border="0">
                        <tr>
                            <td>
                                User ID 
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <?php echo $id; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                First Name  
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <?php echo $fn; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Last Name  
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <?php echo $ln; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Username  
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                            <?php echo $usern; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Email 
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <?php echo $email; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Address 
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <?php echo $address; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                User Type  
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <input type="text" name="u_type" value="<?php echo $user_type; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                User Status 
                            </td>
                            <td>
                                &nbsp&nbsp : &nbsp&nbsp
                            </td>
                            <td>
                                <input type="number" name="u_status" value="<?php echo $status ?>">
                            </td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <input type="submit" value="Update" name="update" class="btn btn-success">
                            </td>
                        </tr>
                    </table>
                </form>
                <br><br>
                Without Updating<a href="all_users.php"><button class="btn btn-primary">Back</button></a>
            </div>
        </div>
    </div>
</div>
   





<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>