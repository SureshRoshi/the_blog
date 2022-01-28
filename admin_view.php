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
    
<div class="container mt-5">

        <?php foreach($query as $t){?>
            <div class="bg-light p-5 rounded-lg text-black text-center">
                <h1><?php echo $t['title'];?></h1>
 
                 <div class="d-flex mt-2 justify-content-center align-items-center">
                    <a href="edit.php?id=<?php echo $t['id']?>" class="btn btn-info btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $t['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ms-2" name="delete">Delete</button>
                    </form>
                </div>

            </div>
            <p class="mt-2 border-left border-dark pl-3 bg-light p-5 rounded-lg text-black"><?php echo $t['content'];?></p>
        <?php } ?>    

        <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
   </div>





    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>