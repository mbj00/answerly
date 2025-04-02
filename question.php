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
            <h3 class="text-center">Ask your question</h3>
        </div>
        <div class="card-body">
            <div class="form-div">
                <form class="signup" method="post" action="server/requests.php">
                    <div class="mb-3">
                        <label for="exampleInputUsername" class="form-label">Question</label>
                        <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="emailHelp"
                            name="question">
                    </div>
                    <div class="mb-3">
                        <label for="categorySelect" class="form-label">Category</label>
                        <select class="form-select" aria-label="Default select example" id="categorySelect"
                            name="categorySelect">
                            <option value="General" selected>General Discussion</option>
                            <option value="Technology">Technology</option>
                            <option value="Education">Education</option>
                            <option value="Science ">Science </option>
                            <option value="Business">Business </option>
                            <option value="Finance">Finance</option>
                            <option value="Entertainment">Entertainment </option>
                            <option value="Health">Health </option>
                            <option value="Lifestyle">Lifestyle </option>
                            <option value="Automotive">Automotive </option>
                            <option value="Politics">Politics </option>
                            <option value="Sports">Sports </option>
                            <option value="Creative">Creative </option>
                            <option value="Philosophy">Philosophy </option>
                            <option value="Help">Help </option>
                        </select>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-primary" name="questionBtn">Post</button>
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