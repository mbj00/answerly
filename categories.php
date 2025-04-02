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
    
    ?>

    <div class="card m-1">
        <div class="card-header">
            <h3 class="text-center">Browse by Category</h3>
        </div>
        <div class="card-body">
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/general.php" class="text-decoration-none">General Discussion</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/technology.php" class="text-decoration-none">Technology</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/education.php" class="text-decoration-none">Education</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/science.php" class="text-decoration-none">Science</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/business.php" class="text-decoration-none">Business</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/finance.php" class="text-decoration-none">Finance</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/entertainment.php" class="text-decoration-none">Entertainment</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/health.php" class="text-decoration-none">Health</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/lifestyle.php" class="text-decoration-none">Lifestyle</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/automotive.php" class="text-decoration-none">Automotive</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/politics.php" class="text-decoration-none">Politics</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/sports.php" class="text-decoration-none">Sports</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/creative.php" class="text-decoration-none">Creative</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/philosophy.php" class="text-decoration-none">Philosophy</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill"></span>
                </li>
            </ol>
            <ol class="list-group list-group mb-1">
                <li class="list-group-item d-flex justify-content-between align-items-start">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold"><a href="category/help.php" class="text-decoration-none">Help</a></div>
                        Content for list item
                    </div>
                    <span class="badge text-bg-primary rounded-pill">Popular</span>
                </li>
            </ol>
        </div>
    </div>

    <?php

    include("common/footer.php");

    ?>

</body>

</html>