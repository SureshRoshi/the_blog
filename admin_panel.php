<?php

    include "logic.php";

    session_start();

    if(!isset($_SESSION['adminLoginId'])){

        header("Location: admin_login.php");

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

    <div class="container mt-5">
        <div class="row">
          <div class="col-12">
              <div class="text-center">
                  <div class="alert alert-success" role="alert">
                      <h1 class="text-uppercase fw-bold">
                          welcome to admin panel - <?php echo $_SESSION['adminLoginId'];?>
                      </h1>
                      <p class=" lead text-muted mt-3">
                          Not <?php echo $_SESSION['adminLoginId'];?> ? 
                          <form action="" method="POST">
                            <button name="logout" class="btn btn-secondary">Log Out</button>
                          </form>
                      </p>
                  </div>
              </div>
          </div>  
        </div>
    </div>

    <div class="container mt-5">

        <!-- Display any info -->
        <?php if(isset($_REQUEST['info'])){ ?>
            <?php if($_REQUEST['info'] == "added"){?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully , To View <a href="index.php" target="_blank">Click Here</a>
                </div>
            <?php } else if($_REQUEST['info'] == "updated"){ ?>
                <div class="alert alert-success" role="alert">
                    Post has been updated successfully , To View <a href="index.php" target="_blank">Click Here</a>
                </div>
                <?php } else if($_REQUEST['info'] == "deleted"){ ?>
                    <div class="alert alert-danger" role="alert">
                    The last post has been deleted !
                </div>
                    <?php }?>
        <?php } ?>

        <!-- Create a new Post button -->
        <div class="text-center">
            <a href="create.php" class="btn btn-outline-primary">+ Create a new post</a>
        </div>
        
        <div class="row mt-5">
            <?php foreach($query as $s){ ?>
                <div class="col-12 col-lg-4 d-flex justify-content-center">
                    <div class="card text-white bg-primary mt-5" style="width: 25rem; height: 15rem">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $s['title'];?></h5>
                            <p class="card-text"><?php echo substr($s['content'], 0, 50);?>...</p>
                            <a href="admin_view.php?id=<?php echo $s['id']?>" class="btn btn-light">Read More <span class="text-danger">&rarr;</span></a>
                        </div>
                    </div>
                </div>
            <?php }?>
        </div>

<?php

    if(isset($_POST['logout'])){

        session_destroy();
        header("Location: index.php");

    } 

?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>