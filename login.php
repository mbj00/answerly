<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Answerly</title>
</head>

<body>
    <?php
    session_start();
    include("common/navbar.php");

    ?>


    <div class="card m-1">
        <div class="card-header">
            <h3 class="text-center">Log in to your account Now</h3>
        </div>
        <div class="card-body">
            <div class="form-div ">
                <form class="signup" method="post" action="server/requests.php">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="loginEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="loginPassword">
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary" name="loginBtn">Log In</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php

    include("common/footer.php");

    ?>



</body>

</html>