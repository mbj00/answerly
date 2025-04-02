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
            <h3 class="text-center">Join the Community Now</h3>
        </div>
        <div class="card-body">
            <div class="form-div">
                <form class="signup" method="post" action="server/requests.php">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Username</label>
                        <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp"
                            name="newUsername">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="newEmail">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="newPassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputCPassword1" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="exampleInputCPassword1" name="newCPassword">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">By clicking submit, you agree to terms and
                            conditions and privacy policy of the website.</label>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary" name="signupBtn">Sign Up</button>
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