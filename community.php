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
            <h3 class="text-center">Community – Answerly</h3>
        </div>
        <div class="card-body">
            <p>Welcome to the <b>Answerly Community!</b> </p>
            <p>This is a space where knowledge meets collaboration. Whether you're here to ask questions, share
                insights, or engage in meaningful discussions, our community is built to foster learning and open
                conversations.</p>
            <h4>What Can You Do Here?</h4>
            <ul>
                <li><b>Ask & Answer Questions – </b>Share your knowledge or get help from experts in various topics.</li>
                <li><b>Join Discussions –</b>Participate in trending topics, debates, and idea-sharing.</li>
                <li><b>Connect with Like-</b>Minded People – Engage with users who share your interests and expertise.
                </li>
            </ul>
            <h4>Community Guidelines</h4>
            <p>To keep this a positive and productive space, please:</p>
            <ul>
                <li>Be respectful and supportive.</li>
                <li>Avoid spam and self-promotion.</li>
                <li>Stay on topic and provide valuable contributions.</li>
            </ul>
            <p>Got a question or suggestion? Feel free to post it in the Community Support section or reach out to us at <a href="mailto:community@answerly.com" class="text-decoration-none">community@answerly.com</a>.</p>
            <p>Let’s build a helpful and vibrant community together! </p>
        </div>
    </div>

    <?php

    include("common/footer.php");

    ?>

</body>

</html>