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
            <h3 class="text-center">Explore Answers</h3>
        </div>
        <div class="card-body">

            <?php

            include("server/db.php");

            session_start();

            // to fetch the question id
            
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $values = []; // Array to store values
            
                foreach ($_POST as $key => $value) {
                    $values[$key] = htmlspecialchars($value);
                }
                $keys = array_keys($values); // Get all keys as an array
                $id = $keys[0];
                $_SESSION['id'] = $id;

            }

            // to fetch the question
            
            // echo $_SESSION['id'];
            
            $questionQuery = "SELECT * FROM `questions` WHERE `id` = '$_SESSION[id]'";

            $qResult = $conn->query($questionQuery);

            if ($qResult) {
                foreach ($qResult as $row) {
                    // print_r($row);
                    $question = $row['question'];
                    $category = $row['category'];
                    $qAuthor = $row['author'];
                    $qTime = $row['time'];
                }
            }

            $entry_date = new DateTime($qTime);
            $current_date = new DateTime("now");
            $interval = $entry_date->diff($current_date);

            echo '<div class="alert alert-primary m-2 aQuestion" role="alert">
            <div>
                <div class="answer">' . $question . '</div>
            <div>
                <p class="category">' . $category . '</p>
                <p class="author"><b>By : ' . $qAuthor . '</b>, ' . $interval->days . ' days ago</p>
            </div>
            </div>
            <div class="answerForm">
            <form action="answer.php" method="get">
                <div class="mb-3 inputForm" >
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="answer" placeholder="Submit your answer">
                    <button type="submit" class="btn btn-info m-1" name="answerPost">Post</button>
                </div>
            </form>
            </div>
            </div>';

            // to post the answer
            
            if (isset($_GET['answerPost'])) {
                $answer = $_GET['answer'];
                $questionId = $_SESSION['id'];
                $aAuthor = "Kalu";

                $ansQuery = "INSERT INTO `answers` (`id`, `questionId`, `answer`, `author`, `time`) VALUES (NULL, '$questionId', '$answer', '$aAuthor', current_timestamp())";

                $ansResult = $conn->query($ansQuery);

                if ($ansResult) {
                    echo "<script>alert('Answer submitted Successfully')</script>";
                }
            }

            // to fetch the answers
            
            $fetchAnswer = "SELECT * FROM `answers` WHERE `questionId` = '$_SESSION[id]'";

            $fetchAnswerResult = $conn->query($fetchAnswer);

            if ($fetchAnswerResult) {
                foreach ($fetchAnswerResult as $row) {
                    $newAnswer = $row["answer"];
                    $newAuthor = $row["author"];
                    $newTime = $row["time"];

                    $new_entry_date = new DateTime($newTime);
                    $new_current_date = new DateTime("now");
                    $new_interval = $entry_date->diff($new_current_date);

                    echo '<div class="alert alert-info m-2 aQuestion" role="alert">
                    <div class="answer">' . $newAnswer . '</div>
                    <div>
                        <p class="author"><b>By : ' . $newAuthor . '</b>,  ' . $new_interval->days . 'days ago</p>
                    </div>
                </div>';
                }
            }

            ?>

        </div>
    </div>

    <?php

    include("common/footer.php");

    ?>


</body>

</html>