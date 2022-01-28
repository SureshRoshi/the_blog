<?php

    include "logic.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>!KNOWN Blog</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light mt-3">
        <div class="container-xxl">
            <a href="index.php" class="navbar-brand">
                <img src="./images/Know.jpg" alt="logo" class="img-fluid">
            </a>
            <!-- toggle button for mobile nav -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
            data-bs-target="#main-nav" aria-controls="main-nav" aria-expanded="false" 
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"> </span></button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
                <ul class="navbar-nav">
                    <li class="nav-item ms-2 d-none d-md-inline">
                        <a href="admin_login.php" class="btn btn-outline-secondary">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">

        <div class="text-center text-muted">
            <h1 class="display-3 text-uppercase fw-bold">Welcome to the Blog</h1>
            <h2 class="display-6 text-muted">Everything you wanna know <span class="display-6">😃</span></h2>
        </div>

        <!-- Display posts from database -->
        <div class="row mt-5">
            <?php foreach($query as $q){?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-primary mt-5" style="width: 25rem; height: 15rem">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $q['title'];?></h5>
                            <p class="card-text"><?php echo substr($q['content'], 0, 50);?>...</p>
                            <a href="view.php?id=<?php echo $q['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>

            <?php if(count($posts)==0) : ?>
            <div class="container">
                <div class="text-center">
                    <h1 class="text-muted display-6 text-uppercase">
                        no posts yet 😐
                    </h1>
                </div>
            </div>
            <?php endif; ?> 

        </div>
    </div>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>