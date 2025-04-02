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
    <script src="https://kit.fontawesome.com/YOUR-KIT-ID.js" crossorigin="anonymous"></script>
    <title>Answerly</title>
</head>

<body>
    <?php
     session_start();
    include("common/navbar.php");
   
    // echo $_SESSION['user'];
    // echo $_SESSION['email'];
    ?>
    <div class="headerImg">
        <div class="headerImage">
            <div class="headerText">
                <div class="headerHeading">
                    <h2>Quick <br>& <br> Insightful <br> Answers</h2>
                    <button type="button">Join Now</button>
                </div>
            </div>
        </div>
    </div>

    <!-- How it works -->

    <div class="card m-1 text-center">
        <div class="card-header ">
            <h2 class="cardsHeading">HOW IT WORKS</h2>
        </div>
        <div class="card-body d-flex justify-content-evenly align-items-space-between">
            <div class="card" style="width: 18rem; height:10rem;">
                <div class="card-body">
                    <h5 class="card-title"> Post a Question </h5>
                    <p class="card-text">Ask about anything you're curious about.</p>
                    <a href="questions.php" class="card-link text-decoration-none">Ask Now</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;height:10rem;">
                <div class="card-body">
                    <h5 class="card-title"> Get Answers </h5>
                    <p class="card-text">Receive responses from real users.</p>
                    <a href="Browse.php" class="card-link text-decoration-none">Browse Answers</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;height:10rem;">
                <div class="card-body">
                    <h5 class="card-title"> Join the Discussion </h5>
                    <p class="card-text">Upvote the best answers and share insights.</p>
                    <a href="signup.php" class="card-link text-decoration-none">Join Now</a>
                </div>
            </div>

        </div>
    </div>

    <!-- Featured Questions -->

    <div class="card m-1">
        <div class="card-header">
            <h2 class="cardsHeading">FEATURED QUESTIONS</h2>
        </div>
        <div class="card-body">
            <h3 class="text-secondary">Trending Questions</h3>

            <?php
            // Code to fetch all questions 
            
            include("server/db.php");

            $query = "SELECT * FROM `questions` ORDER BY RAND() LIMIT 3";

            $result = $conn->query($query);

            if ($result) {
                // echo "entered";
                foreach ($result as $row) {
                    // print_r($row);
                    $questionId = $row['id'];
                    $question = $row['question'];
                    $category = $row['category'];
                    $author = $row['author'];
                    $time = $row['time'];

                    echo '<div class="alert alert-primary m-2 question" role="alert">
                        <span>' . $question . 'Category :' . $category . '</span>
                        <form action="answer.php" method="post">
                        <input type="password" class="form-control visually-hidden" id="exampleInputPassword1" name="' . $questionId . '">
                        <button type="submit" class="btn btn-info" name="questionId">View</button>
                        </form>
                    </div>';

                }

            }

            ?>

            <h3 class="text-secondary">Latest Questions</h3>

            <?php
            // Code to fetch all questions 
            
            include("server/db.php");

            $query = "SELECT * FROM `questions` ORDER BY `time` DESC LIMIT 3";

            $result = $conn->query($query);

            if ($result) {
                // echo "entered";
                foreach ($result as $row) {
                    // print_r($row);
                    $questionId = $row['id'];
                    $question = $row['question'];
                    $category = $row['category'];
                    $author = $row['author'];
                    $time = $row['time'];

                    echo '<div class="alert alert-primary m-2 question" role="alert">
                        <span>' . $question . 'Category :' . $category . '</span>
                        <form action="answer.php" method="post">
                        <input type="password" class="form-control visually-hidden" id="exampleInputPassword1" name="' . $questionId . '">
                        <button type="submit" class="btn btn-info" name="questionId">View</button>
                        </form>
                    </div>';

                }

            }

            ?>

        </div>
    </div>

    <!-- Subscribe -->

    <div class="card m-1">
        <div class="card-header">
            <h4 class="cardsHeading">SUBSCRIBE</h4>
        </div>
        <div class="card-body">
            <div class="input-group mb-3">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus corrupti itaque alias
                    aspernatur harum. Deserunt sed, quisquam molestiae dignissimos sequi non repellat perspiciatis.</p>
                <input type="text" class="form-control" placeholder="Enter your Email..."
                    aria-label="Recipient's username" aria-describedby="button-addon2">
                <button class="btn btn-outline-secondary" type="button" id="button-addon2">Subscribe</button>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <?php

    include("common/footer.php");

    ?>

</body>

</html>