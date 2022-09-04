<?php
include "components/functions.php";
$categories = getAllCategories();

if (!empty($_POST)) {
    $products = searchProducts($_POST['search']);
}else{
    $products = getAllProducts();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <?php 
    include "components/header.php"
    ?>


    <div class="row col-12 mt-4">

        <?php
          foreach ($products as $product){

            print '<div class="col-3">
            <div class="card" style="width: 18rem;">
                <img src="img/'.$product['image'].'" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">'.$product['name'].'</h5>
                    <p class="card-text">'.$product['description'].'</p>
                    <a href="product.php?id='.$product['id'].'" class="btn btn-primary">Display</a>
                </div>
            </div>
        </div>';
        
    
    }
    ?>

    </div>



    <div class="bg-dark">
        <p class="text-white text-center p-5 mb-0 mt-4">
            All rights reserved © 2022
        </p>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>