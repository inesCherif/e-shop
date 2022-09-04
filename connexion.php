<?php
include "components/functions.php";
$user = true;
$categories = getAllCategories();
if (!empty($_POST)) {

    $user = ConnectVisitor($_POST);
    
//     if(count($user) > 0){
//         session_start();
//         $_SESSION['email'] = $user['email'];
//         $_SESSION['FirstName'] = $user['FirstName'];
//         $_SESSION['LastName'] = $user['LastName'];
//         $_SESSION['pw'] = $user['pw'];
//         $_SESSION['phone'] = $user['phone'];
//         // header('location: profile.php');
//     }
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-SHOP connection</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.min.css">
</head>

<body>


    <?php 
    include "components/header.php"
    ?>

    <div class="col-12 p-5">
        <h1 class="text-center">Connection</h1>
        <form action="connexion.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                    aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="pw" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Sign In</button>
        </form>
    </div>

    <!-- FOOTER -->
    <div class="bg-dark">
        <p class="text-white text-center p-5 mb-0 mt-4">
            All rights reserved © 2022
        </p>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.16.6/sweetalert2.all.min.js"></script>

<?php 
if (!$user){
print "
    <script>
        Swal.fire({
        title: 'Erreur',
        text: 'Sorry, we can\'t find an account with this email address. Please try again or create a new account.',
        icon: 'error',
        confirmButtonText: 'ok',
        timer : 10000
      })
    </script>";
}


?>



</html>