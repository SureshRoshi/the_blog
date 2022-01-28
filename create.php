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
        <form method="POST">
            <input type="text" placeholder="BLOG TITLE" class="form-control my-3 bg-light text-black text-center" name="title">
            <input type="file" id="image_input">
            <textarea name="content" class="form-control my-3 bg-light text-black" cols="30" rows="10" id="display_image"></textarea>
            <button class="btn btn-outline-success" name="new_post">Add Post</button>
            <a href="admin_panel.php" class="btn btn-outline-dark">Go Back</a>
        </form>
   </div>


    <!-- bootstrap js -->
    <script>
        const image_input = document.querySelector("#image_input");
        var uploaded_image;

        image_input.addEventListener('change', function() {
        const reader = new FileReader();
        reader.addEventListener('load', () => {
            uploaded_image = reader.result;
            document.querySelector("#display_image").style.backgroundImage = `url(${uploaded_image})`;
        });
        reader.readAsDataURL(this.files[0]);
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>