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
            <?php foreach($query as $q){ ?>
                <form method="POST">
                    <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                    <input type="text" placeholder="Blog Title" class="form-control my-3 bg-light text-black text-center" name="title" value="<?php echo $q['title']?>">
                    <textarea name="content" class="form-control my-3 bg-light text-black" cols="30" rows="10"><?php echo $q['content']?></textarea>
                    <button class="btn btn-outline-warning" name="update">Update</button>
                </form>
            <?php } ?>    
    </div>





    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>