<?php

    include "connection.php";

    
    if(isset($_POST["signin"])){
    
        $query = "SELECT * FROM `admin_login` WHERE  `Admin_name` = '$_POST[AdminName]' AND `Admin_password` = '$_POST[AdminPassword]'";
        $result = mysqli_query($conn,$query);

        //print_r($result);

        if(mysqli_num_rows($result)==1){
            session_start();
            $_SESSION['adminLoginId']=$_POST['AdminName'];
            header("Location: admin_panel.php");
        }
        else{
            echo "
            <div class='container mt-5'>
                <div class='text-center'>
                    <div class='alert alert-danger' role='alert'>
                        Incorrect Credentials
                    </div>
                </div>
            </div>";
            
        }

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <title>!KNOWN Blog</title>
</head>
<body>

<section>
    <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-12 col-md-6 col-sm-7 m-auto">
                <div class="card border-0 shadow">
                    <div class="card-body mt-5 mx-5">

                        <div class="card-title bg-light mx-5">
                            <h2 class="display-4 text-center text-uppercase mb-5 text-muted fw-bold">Login Page</h2>
                        </div>

                        <form action="" method="POST">
                            <label class="form-label" for="">Admin Name <span class="link-danger">*</span></label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-person-circle"></i>
                                </span>
                                <input type="text" placeholder="Admin Name" class="form-control" name="AdminName" required>
                            </div>
                            <label class="form-label" for="">Password <span class="link-danger">*</span></label>
                            <div class="mb-4 input-group">
                                <span class="input-group-text">
                                    <i class="bi bi-lock-fill"></i>
                                </span>
                                <input type="password" placeholder="Password" class="form-control" name="AdminPassword" required>
                            </div>
                            <div class="text-center mt-3">
                                <input type="submit" name="signin" value="Login" class="btn btn-primary">
                                <div class="text-center">
                                    <input type="checkbox" name="remember" id="remember" placeholder="Remember me" checked>
                                <label for="" class="form-label mt-3">Remember Me</label>
                            </div>
                                <a href="#" class="nav-link" >Don't have an account ?</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>    
 </section>  


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>