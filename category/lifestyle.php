<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <title>Answerly</title>
</head>

<body>
    <?php
    include("navbar.php");
    ?>

    <div class="card m-1">
        <div class="card-header">
            <h4 class="text-center">General Discussion</h4>
        </div>
        <div class="card-body">
            <div class="">
                <?php
                // Code to fetch all questions 
                
                include("../server/db.php");

                $query = "SELECT * FROM `questions` WHERE `category` = 'Lifestyle'";

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

                        $entry_date = new DateTime($time);
                    $current_date = new DateTime("now");
                    $interval = $entry_date->diff($current_date);
                
                    echo '<div class="alert alert-primary m-2 d-flex justify-content-between" role="alert">
                            <div>
                                <div class="answer">'.$question.'</div>
                            <div>
                                <p class="category">'.$category.'</p>
                                <p class="author"><b>By : '.$author.'</b>, '.$interval->days.' days ago</p>
                            </div>
                            </div>
                            <div class="">
                              <form action="../answer.php" method="post">
                                <input type="password" class="form-control visually-hidden" id="exampleInputPassword1" name="' . $questionId . '">
                                <button type="submit" class="btn btn-info" name="questionId">View</button>
                              </form>
                            </div>
                            </div>';

                    }

                }

                ?>
            </div>
        </div>

    </div>


    <?php

    include("../common/footer.php");

    ?>

</body>

</html>